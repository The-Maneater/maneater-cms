<?php

namespace App\Http\Controllers;

use App\Paginators\PublishDatePaginator;
use App\Section;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class SectionArchivesController extends Controller
{
    public function show($slug)
    {
        $page = 0;
        if(request()->has('page')) $page = request('page') - 1;
        $section = Section::findBySlug($slug);
        $sectionName = $section->name;
        $count = $section->withCount('stories')->get()->first(function ($inner) use ($section) {
            return $inner->slug === $section->slug;
        })->stories_count;
        $stories = $section->stories()->latest('publish_date')->offset($page * 20)->take(20)->get()->load('headerPhotos');
        $paginator = (new PublishDatePaginator($stories, $count))->paginate(20, $page)->withPath("/section/{$section->slug}/archives");
//        $paginatedStories = collect(array_slice($stories->toArray(), $this->perPage * $page, $this->perPage, true))
//        ->groupBy('publish_date');
//        $paginator = new LengthAwarePaginator($paginatedStories, count($stories), $this->perPage, $page);
        //dd($paginator);
        return view('sections.archives', compact('paginator', 'sectionName'));
    }
}
