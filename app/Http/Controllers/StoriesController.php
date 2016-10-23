<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateStory;
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
        //
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateStory $request)
    {
        Story::create($request->all());

        return redirect("/");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function setup(Request $request){
        Story::create([
            'slug'          => 'test',
            'runsheet_slug' => 'my-project',
            'title'         => 'My Story',
            'issue'         => 'Issue 99',
            'publish_date'  => '2016-08-08 12:00:00',
            'cDeck'         => 'This is a cDeck',
            'byline'        => 'Michael Smith Jr',
            'section'       => 'unews',
            'body'          => "#Header \n Hello World",
            'priority'      => 10
            ]);
        return 'Story created';
    }
}
