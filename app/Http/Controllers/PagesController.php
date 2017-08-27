<?php

namespace App\Http\Controllers;

use App\Ad;
use App\Classified;
use App\Graphic;
use App\Layout;
use App\Paginators\PublishDatePaginator;
use App\Photo;
use App\Repositories\AdRepository;
use App\Repositories\StoryRepository;
use App\Section;
use App\Staffer;
use App\Story;
use App\WebFront;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Cache;

class PagesController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard.dashboard');
    }

    public function frontpage()
    {
        $sections = StoryRepository::getFrontPageSectionStories();
        //dd($sections);
        $minutes = 720;
        $latest = Cache::remember('latestStories', $minutes, function () {
            return Story::with(['section'])->latest()->take(10)->get();
        });
        //$latest = Story::with(['section'])->latest()->take(10)->get();
        $frontPageStories = WebFront::frontPage();
        $ads = AdRepository::cubesAndBanner(2,1);

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

    public function latest()
    {
        $page = 0;
        if(request()->has('page')) $page = request('page') - 1;
        $stories = Story::latest()->get()->load(['writers']);
        $paginator = (new PublishDatePaginator($stories))->paginate(25, $page)->withPath('/stories');
        $ads = AdRepository::cubes(2);

        return view('stories.latest', compact('paginator', 'ads'));
    }

    public function graphics()
    {
        $page = 0;
        if(request()->has('page')) $page = request('page') - 1;
        $graphics = Graphic::latest()->get();

        $paginator = (new PublishDatePaginator($graphics))->paginate(25, $page)->withPath('/graphics');
//        dd($paginator);
        $ads = AdRepository::cubes(2);

        return view('graphics.index', compact('paginator', 'ads'));
    }

    public function layouts()
    {
        $page = 0;
        if(request()->has('page')) $page = request('page') - 1;
        $graphics = Layout::latest()->get();

        $paginator = (new PublishDatePaginator($graphics))->paginate(25, $page)->withPath('/layouts');
//        dd($paginator);
        $ads = AdRepository::cubes(2);

        return view('layout.index', compact('paginator', 'ads'));
    }

    public function photos()
    {
        $page = 0;
        if(request()->has('page')) $page = request('page') - 1;
        $graphics = Photo::latest()->get();

        $paginator = (new PublishDatePaginator($graphics))->paginate(25, $page)->withPath('/photos');
//        dd($paginator);
        $ads = AdRepository::cubes(2);

        return view('photos.index', compact('paginator', 'ads'));
    }
}
