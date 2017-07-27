<?php

namespace App\Http\Controllers;

use App\Section;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class SectionArchivesController extends Controller
{
    private $perPage = 20;

    public function show($slug)
    {
        $page = 0;
        if(request()->has('page')) $page = request('page') - 1;
        $section = Section::findBySlug($slug);
        $sectionName = $section->name;
        $stories = $section->stories()->latest()->get();
        $paginatedStories = collect(array_slice($stories->toArray(), $this->perPage * $page, $this->perPage, true))
            ->groupBy('publish_date');
        $paginator = new LengthAwarePaginator($paginatedStories, count($stories), $this->perPage, $page);
        //dd($paginator);
        return view('sections.archives', compact('paginator', 'sectionName'));
    }
}
