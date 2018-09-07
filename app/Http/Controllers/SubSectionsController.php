<?php

namespace App\Http\Controllers;

use App\SubSection;
use App\Repositories\AdRepository;
use Illuminate\Http\Request;
use App\Story;

class SubSectionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $subsections = request()->has('search') ?
            SubSection::search(request('search'))->paginate(15) :
            SubSection::orderBy('id')->paginate(15);
        $subsections->load('section');
        return view('admin.subsections.list', compact('subsections'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.subsections.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $subsection = new SubSection();
        $subsection->fill($request->except('section'));
        $subsection->section()->associate($request->input('section'));
        $subsection->save();

        return redirect('/admin/core/subsections')->with('status', 'Sub Section created successfully');
       //NEXT SET UP THE SUBSECTIONSCONTROLLER@EDIT!!!!!!!
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SubSection  $subSection
     * @return \Illuminate\Http\Response
     */
    public function show($slug, $subSection)
    {

        $subsection = SubSection::findBySubSection($subSection);
      
        //$stories = $subsection->stories()->latest('id')->take(2)->get();
        $stories = Story::where('subsection_id', $subsection->id)->take(2)->get();

        // $priorityStories = Cache::remember('section.' . $slug . '.web-front-stories', 720, function() use ($section) {
        //    return $section->webFrontStories()->get()->load(['section']);
        // });
        
        //$priorityStories = $section->webFrontStories()->get();
       
        // $tags = Cache::remember('section.' . $slug . '.latest-tags', 720, function() use($section){
        //     return  $section->latestTags();
        // });
        
        //$tags = $section->latestTags();
       
        $ads = AdRepository::cubes(2);
       
        return view('subsections.index', compact('stories', 'ads', 'subsection'));
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SubSection  $subSection
     * @return \Illuminate\Http\Response
     */
    public function edit(SubSection $subSection)
    {
        return view('admin.subsections.edit', compact('subSection'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SubSection  $subSection
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubSection $subSection)
    {
        $subSection->name = $request->input('name');
        $subSection->section()->associate($request->input('section'));
        $subSection->save();

        return redirect('/admin/core/subsections')->with('status', 'Sub Section successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SubSection  $subSection
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubSection $subSection)
    {
        //
    }
}
