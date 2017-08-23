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
        $cubes = Ad::cube()->active()->inRandomOrder()->take(2)->get();
        $cubes->each->serve();
        $banner = Ad::banner()->active()->inRandomOrder()->take(1)->get();
        $banner->each->serve();
        $ads = collect();
        $ads['cubes'] = $cubes;
        $ads['banner'] = $banner;

        return view('stories.index', compact('sections', 'latest', 'frontPageStories', 'ads'));
    }

    public function editorialBoard()
    {
        $staffers = Staffer::with(['edBoardPositions'])->whereHas('edBoardPositions', function($p){
            $p->where('current', true);
        })->get()
            ->sortBy(function($item, $key){
                return $item->edBoardPositions()->where('current', true)->first()->priority;
            })
        ->values();
        $titles = $staffers->map(function($item,$key){
            return $item->edBoardPositions()->where('current', true)->first()->title;
        });

        return view('staff.list', compact('staffers', 'titles'));
    }

    public function classifieds()
    {
        $classifieds = Classified::active()->paginate(25);
        //dd($classifieds);
        return view('classifieds.index', compact('classifieds'));
    }

    public function allStaff()
    {
        $staff = Staffer::orderBy('first_name')->paginate(1);
        //dd($staff);
        return view('staff.all', compact('staff'));
    }
}
