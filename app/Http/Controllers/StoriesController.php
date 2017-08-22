<?php

namespace App\Http\Controllers;

use App\Ad;
use App\Http\Requests\CreateStoryRequest;
use App\Staffer;
use App\Story;
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
            $articles = Story::orderBy('publish_date', "DESC")->paginate(25);
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
            if($staffer->stories()->count() > 10 && $staffer->isA('Reporter')){
                $staffer->makeA('Staff Writer', 'Reporter');
            }
        });
        $tags = $request->input('tags');
        $story->attachTags($tags);
        $story->writers()->attach($writers->toArray());

        $story->photos()->sync($photos);
        $story->graphics()->sync($request->input('graphics', []));

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
        $story = Story::findBySectionAndSlug($section, $slug);
        $cubes = Ad::cube()->active()->inRandomOrder()->take(4)->get();
        $cubes->each->serve();
        $banner = Ad::banner()->active()->inRandomOrder()->take(1)->get();
        $banner->each->serve();
        $inlinePhotos = $story->inlinePhotos()->get();
        $append = "";
        $inlinePhotos->each(function($item, $key) use(&$append){
            $append .= "\n [" . $item->pivot->reference . "]: " . env('APP_URL') . $item->location;
        });
        $story->body .= $append;
        $ads = collect(['cubes' => $cubes, 'banner'=>$banner]);

        $relatedArticles = Story::withAnyTags($story->tags)
            ->inRandomOrder()
            ->take(5)
            ->get();
        return view('stories.show', compact('story', 'ads', 'relatedArticles'));
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
        $article = Story::findBySectionAndSlug($section, $slug);
        $article->update($request->except(['issue', 'byline', 'topPhotos', 'inlinePhotos' , 'graphics', 'section', 'tags']));
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

        return redirect('/admin/core/stories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $section
     * @param $slug
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function destroy($section, $slug)
    {
        $story = Story::findBySectionAndSlug($section, $slug);
        $this->authorize('delete', $story);

        $story->delete();

        return redirect('/admin/core/stories');
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
