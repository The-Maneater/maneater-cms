<?php

namespace App\Http\Controllers;

use App\Ad;
use App\Correction;
use App\Http\Requests\CreateStoryRequest;
use App\Repositories\AdRepository;
use App\Repositories\CacheRepository;
use App\Staffer;
use App\Story;
use Carbon\Carbon;
use Illuminate\Http\Request;

class StoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('index', Story::class);
        if(request()->has('search')){
            $articles = Story::search(request('search'))->paginate(25);
        }else{
            $articles = Story::with(['issue', 'section'])->orderBy('publish_date', "DESC")->paginate(25);
        }

        return view('admin.articles.list', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\CreateStoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateStoryRequest $request)
    {
        $story = new Story($request->except(['tags', 'issue', 'section', 'byline', 'topPhotos', 'inlinePhotos', 'graphics']));
        $story->slug = $story->getUniqueSlug();
        $story->issue()->associate($request->input('issue'));
        $story->section()->associate($request->input('section'));

        $topPhotos = collect($request->input('topPhotos', []))
            ->flip()
            ->map(function($item, $key){
                return ['type' => 'header'];
            });
        $inlinePhotos = collect($request->input('inlinePhotos'));
        $ids = $inlinePhotos->pluck('photo');
        $references = $inlinePhotos->pluck('reference');
        $ids = $this->getInlinePhotos($ids, $references);
        $photos = $topPhotos->toArray() + $ids->toArray();

        $story->save();

        $writers = collect($request->input('byline'));

        $writers->each(function($staffer, $key){
            /** @var \App\Staffer $staffer  */
            $staffer = Staffer::find($staffer);
            //dd($staffer);
            if($staffer->stories()->count() > 10 && $staffer->writer_pos == "Reporter"){
                //$staffer->makeA('Staff Writer', 'Reporter');
                $staffer->writer_pos = "Staff Writer";
                $staffer->save();
            }
        });
        $tags = $request->input('tags');
        $story->attachTags($tags);
        $story->writers()->attach($writers->toArray());

        $story->photos()->sync($photos);
        $story->graphics()->sync($request->input('graphics', []));

        CacheRepository::updateLatestStories();
        CacheRepository::updateSectionTopTags($story);

        return redirect('/admin/core/stories');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $section
     * @param  int  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($section, $slug)
    {
        $story = Story::findBySectionAndSlug($section, $slug)->load(['writers']);
        $urls = array();
        $urls['facebook'] = "https://www.facebook.com/sharer/sharer.php?u=" . request()->fullUrl();
        $urls['twitter'] = "http://www.twitter.com/share?url=" . request()->fullUrl();
        $urls['google'] = "https://plus.google.com/share?url=" . request()->fullUrl();
        $inlinePhotos = $story->inlinePhotos()->get();
        $append = "";
        $inlinePhotos->each(function($item, $key) use(&$append){
            $append .= "\n [" . $item->pivot->reference . "]: " . $item->path();
        });
        $story->body .= $append;
        $ads = AdRepository::cubesAndBanner(4,1);
        $relatedArticles = count($story->tags) > 0 ?
        Story::withAllTags([$story->tags[0]])
            ->orderBy('id', 'DESC')
            ->take(5)
            ->get()
            ->load(['section']) : collect();
        return $story->type === "gallery" ?
            view('stories.gallery', compact('story', 'ads', 'relatedArticles', 'urls')) :
            view('stories.show', compact('story', 'ads', 'relatedArticles', 'urls'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $section
     * @param $slug
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function edit($section, $slug)
    {
        $article = Story::findBySectionAndSlug($section, $slug);
        return view('admin.articles.edit', compact('article', 'section', 'slug'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param CreateStoryRequest|Request $request
     * @param $section
     * @param $slug
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function update(CreateStoryRequest $request, $section, $slug)
    {
        //dd($request->all());
        //dd(request('corrections'));
        $article = Story::findBySectionAndSlug($section, $slug);
        $article->update($request->except(['issue', 'byline', 'topPhotos', 'inlinePhotos' , 'graphics', 'section', 'tags', 'corrections']));
        $article->writers()->sync($request->input('byline'));
        $article->issue()->associate($request->input('issue'));

        $topPhotos = collect($request->input('topPhotos', []))
            ->flip()
            ->map(function($item, $key){
                return ['type' => 'header'];
            });
        $inlinePhotos = collect($request->input('inlinePhotos'));
        $ids = $inlinePhotos->pluck('photo');
        $references = $inlinePhotos->pluck('reference');
        $ids = $this->getInlinePhotos($ids, $references);
        $photos = $topPhotos->toArray() + $ids->toArray();

        $article->photos()->sync($photos);
        $article->graphics()->sync($request->input('graphics', []));
        $article->section()->associate($request->input('section'));
        $article->syncTags($request->input('tags'));
        $article->save();
        if(request()->has('corrections')){
            foreach(request('corrections') as $correction){
                if($correction !== null && $correction !== ""){
                    $article->corrections()->create([
                        'date' => Carbon::now(),
                        'content' => $correction
                    ]);
                }
//           $correction = new Correction;
//           $correction->date = Carbon::now();
//           $correction->content = $correction;

            }
        }

        CacheRepository::updateLatestStories();
        CacheRepository::updateSectionTopTags($article);
        $article->section_webfront_priority !== null ? CacheRepository::updateSectionWebFront($article->section) : null;

        return redirect('/admin/core/stories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return bool|\Illuminate\Http\Response
     * @internal param int $id
     */
    public function destroy($id)
    {
        $story = Story::find($id);
        $story->writers()->sync([]);
        $story->graphics()->sync([]);
        $story->corrections()->delete();
        $story->photos()->sync([]);
        //$this->authorize('delete', $story);

        $story->delete();

        return response('', 200);
    }

    /**
     * Manipulates the list of inline photo ids and
     * transforms it to the format needed.
     * @param $ids
     * @param $references
     * @return mixed
     */
    private function getInlinePhotos($ids, $references)
    {
        $ids = $ids->reject(function ($item) {
                return $item === '' || $item === null;
            })
            ->flip()
            ->map(function ($item, $key) use ($references) {
                return ['type' => 'inline', 'reference' => $references[$item]];
            });
        return $ids;
    }
}
