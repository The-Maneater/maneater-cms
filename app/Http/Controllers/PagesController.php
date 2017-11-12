<?php

namespace App\Http\Controllers;

use App\Ad;
use App\Classified;
use App\Graphic;
use App\Issue;
use App\Layout;
use App\Paginators\PublishDatePaginator;
use App\Photo;
use App\Repositories\AdRepository;
use App\Repositories\StoryRepository;
use App\Section;
use App\Staffer;
use App\Story;
use App\WebFront;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Cache;
use Spatie\PdfToImage\Pdf;

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
            return Story::with(['section'])->latest('publish_date')->take(10)->get();
        });
        //$latest = Story::with(['section'])->latest()->take(10)->get();
        $frontPageStories = WebFront::frontPage();
        $ads = AdRepository::cubesAndBanner(2,1);
        $issue = Issue::with(['layout'])->latest('id')->whereNotNull('issu_url')->first();
//        if($issue->layout->img_link === null){
//            $pdf = new Pdf($issue->layout->link);
//            $now = Carbon::now();
//            $filename = pathinfo($issue->layout->link)['basename'];
//            $pdf->saveImage("/home/themaneater/webapps/media/pages/$now->year/$now->month$now->day/$filename");
//            $issue->layout->img_link = "/media/pages/$now->year/$now->month$now->day/$filename";
//            $issue->layout->save();
//        }
        //dd($issue);
        //dd($frontPageStories);

        return view('stories.index', compact('sections', 'latest', 'frontPageStories', 'ads', 'issue'));
    }

    public function editorialBoard()
    {
        $staffers = Cache::remember('editorialBoard', 720, function(){
            return Staffer::with(['edBoardPositions'])->whereHas('edBoardPositions', function($p){
                $p->where('current', true);
            })->get()
                ->sortBy(function($item, $key){
                    return $item->edBoardPositions()->where('current', true)->first()->priority;
                })
                ->values();
        });
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
        $staff = Staffer::orderBy('first_name')->paginate(75);
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
        $graphics = Layout::latest('id')->offset($page * 20)->take(20)->get();

        $paginator = (new PublishDatePaginator($graphics, Layout::count()))->paginate(25, $page, 'pub_date')->withPath('/layouts');
//        dd($paginator);
        $ads = AdRepository::cubes(2);

        return view('layout.index', compact('paginator', 'ads'));
    }

    public function photos()
    {
        $page = 0;
        if(request()->has('page')) $page = request('page') - 1;
        $graphics = Photo::latest('id')->offset($page * 20)->take(20)->get();

        $paginator = (new PublishDatePaginator($graphics, Photo::count()))->paginate(25, $page, 'pub_date')->withPath('/photos');
//        dd($paginator);
        $ads = AdRepository::cubes(2);

        return view('photos.index', compact('paginator', 'ads'));
    }
}
