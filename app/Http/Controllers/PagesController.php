<?php

namespace App\Http\Controllers;

use App\Ad;
use App\Classified;
use App\Section;
use App\Staffer;
use App\Story;
use App\WebFront;
use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard.dashboard');
    }

    public function frontpage()
    {
        $sections = Section::with(['latestStories'])->get()->take(6);
        $latest = Story::with(['section'])->latest()->take(10)->get();
        $frontPageStories = WebFront::frontPage();
        $ads = Ad::active()->inRandomOrder()->take(2)->get();
        $ads->each(function($ad){
            $ad->serve();
        });
        //dd($frontPageStories);
        //dd($latest);
        //dd($sections);
        return view('stories.index', compact('sections', 'latest', 'frontPageStories', 'ads'));
    }

    public function editorialBoard()
    {
        $staffers = Staffer::whereHas('edBoardPositions', function($p){
            $p->where('end_date', null);
        })->get();
        $titles = $staffers->map(function($item,$key){
            return $item->edBoardPositions->where('end_date', null)->first()->title;
        });

        return view('staff.list', compact('staffers', 'titles'));
    }

    public function classifieds()
    {
        $classifieds = Classified::active()->paginate(25);
        //dd($classifieds);
        return view('classifieds.index', compact('classifieds'));
    }
}
