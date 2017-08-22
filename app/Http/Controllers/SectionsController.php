<?php

namespace App\Http\Controllers;

use App\Ad;
use App\Http\Requests;
use App\Http\Requests\CreateSectionRequest;
use App\Section;
use Illuminate\Http\Request;

class SectionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sections = request()->has('search') ?
            Section::search(request('search'))->paginate(15) :
            Section::orderBy('name')->paginate(15);
        $sections->load('publication');
        return view('admin.sections.list', compact('sections'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sections.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CreateSectionRequest|Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateSectionRequest $request)
    {
        $section = new Section();
        $section->fill($request->except('publication'));
        $section->publication()->associate($request->input('publication'));
        $section->save();

        return redirect('/admin/core/sections')->with('status', 'Section created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $section = Section::findBySlug($slug);
        $stories = $section->stories()->latest()->take(10)->get();
        $priorityStories = $section->webFrontStories()->get();
        $tags = $section->latestTags();
        $cubes = Ad::cube()->active()->inRandomOrder()->take(2)->get();
        $cubes->each->serve();
        $ads = collect(["cubes" => $cubes]);
        return view('sections.index', compact('stories', 'priorityStories', 'tags', 'ads'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Section  $section
     * @return \Illuminate\Http\Response
     */
    public function edit(Section $section)
    {
       return view('admin.sections.edit', compact('section'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Section  $section
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Section $section)
    {
        $section->name = $request->input('name');
        $section->publication()->associate($request->input('publication'));
        $section->save();

        return redirect('/admin/core/sections')->with('status', 'Section successfully updated');
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
}
