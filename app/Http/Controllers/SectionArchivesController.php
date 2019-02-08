<?php

namespace App\Http\Controllers;

use App\Paginators\PublishDatePaginator;
use App\Section;
use App\Story;
use App\Repositories\AdRepository;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class SectionArchivesController extends Controller
{
    public function show($slug)
    {


        // get subsection object
        $section = Section::findBySlug($slug);

        // get subsection name
        $sectionName = $section->name;

        // get stories and paginate them
        $stories = Story::where('section_id', $section->id)->paginate(9);

        // get ads
        $ads = AdRepository::cubes(2);

        // pass variables to archives page
        return view('sections.archives', compact('stories', 'sectionName', 'ads'));

    }
}
