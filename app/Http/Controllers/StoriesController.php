<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateStoryRequest;
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
        $articles = Story::orderBy('publish_date')->paginate(25);

        return view('admin.article-list', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create-story');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\CreateStoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateStoryRequest $request)
    {
        Story::create($request->input());

        return redirect("/");
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
        //dd($section);
        //dd(Story::findBySectionAndSlug($section, $slug));
        $story = Story::findBySectionAndSlug($section, $slug);
        return view('stories.show', compact('story'));
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
        return view('admin.articles.edit', compact(['article', 'section', 'slug']));
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
        $article->update($request->except(['issue', 'byline', 'photos', 'graphics', 'section']));
        $article->writers()->sync($request->input('byline'));
        $article->issue()->associate($request->input('issue'));
        $article->photos()->sync($request->input('photos', []));
        $article->graphics()->sync($request->input('graphics', []));
        $article->section()->associate($request->input('section'));

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

        $story->delete();

        return response()->json([
                'status' => 'ok'
            ]);
    }
}
