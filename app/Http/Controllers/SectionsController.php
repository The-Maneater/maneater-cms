<?php

namespace App\Http\Controllers;

use App\Ad;
use App\Http\Requests;
use App\Http\Requests\CreateSectionRequest;
use App\Repositories\AdRepository;
use App\Repositories\CacheRepository;
use App\Section;
use App\SubSection;
use App\Story;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;

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
            Section::orderBy('id')->paginate(15);
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

        $subsections = DB::table('sub_sections')->where('section_id', $section->id)->get();

        $subsectionsStories = array();

        foreach($subsections as $subsection){
            $subsectionsStories[] = Story::with('headerPhotos')->where('subsection_id', $subsection->id)->latest()->take(5)->get();
        }

        $priorityStories = Cache::remember('section.' . $slug . '.web-front-stories', 720, function() use ($section) {
           return $section->webFrontStories()->get()->load(['section']);
        });
        
        //$priorityStories = $section->webFrontStories()->get();
       
        // $tags = Cache::remember('section.' . $slug . '.latest-tags', 720, function() use($section){
        //     return  $section->latestTags();
        // });
        
        //$tags = $section->latestTags();

        //dd($subsections);

        foreach ($subsections as $subsection) {
            if($subsection->section_id != 0){
                $section = Section::where('id', $subsection->section_id)->first();
                $subsection->Aurl = "/section/" . $section->slug . "/" . $subsection->slug;
            }
            else{
                $subsection->Aurl = "";
            }
        }

        $ads = AdRepository::cubes(1);
        $count = 0;
        
        return view('sections.index', compact('section', 'priorityStories', 'ads', 'subsections', 'subsectionsStories', 'count'));
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
