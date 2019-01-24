<?php

namespace App\Http\Controllers;

use App\Paginators\PublishDatePaginator;
use App\Section;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use App\SubSection;
use App\Repositories\AdRepository;
use App\Story;

class SubSectionsArchivesController extends Controller
{
    public function show($slug, $subSection)
    {
        // get subsection object
        $subsection = SubSection::findBySubSection($subSection);

        // get subsection name
        $sectionName = $subsection->name;

        // get stories and paginate them
        $stories = Story::where('subsection_id', $subsection->id)->paginate(9);

        // get ads
        $ads = AdRepository::cubes(2);

        // pass variables to archives page
        return view('subsections.archives', compact('stories', 'sectionName', 'ads'));
    }
}
