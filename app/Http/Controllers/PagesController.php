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
use App\SubSection;
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
        // gets 6 most recent stories from different sections
        $sections = StoryRepository::getFrontPageSectionStories();
//        dd($sections);

        

        foreach ($sections['news'] as $story) {
            
            if($story->subsection_id != 0){
                $subsection = SubSection::with(['section'])->where('id', $story->subsection_id)->first();
                $story->Asection = $subsection->name;
                $story->Aurl = "/section/" . $subsection->section->slug . "/" . $subsection->slug;
            }
            else{
                $section = Section::where('id', $story->section_id)->first();
                $story->Asection = $section->name;
                $story->Aurl = "/section/" . $section->slug;
            }
        }

        foreach ($sections['sports'] as $story) {
            
            if($story->subsection_id != 0){
                $subsection = SubSection::with(['section'])->where('id', $story->subsection_id)->first();
                $story->Asection = $subsection->name;
                $story->Aurl = "/section/" . $subsection->section->slug . "/" . $subsection->slug;
            }
            else{
                $section = Section::where('id', $story->section_id)->first();
                $story->Asection = $section->name;
                $story->Aurl = "/section/" . $section->slug;
            }
        }

        foreach ($sections['opinion'] as $story) {
            
            if($story->subsection_id != 0){
                $subsection = SubSection::with(['section'])->where('id', $story->subsection_id)->first();
                $story->Asection = $subsection->name;
                $story->Aurl = "/section/" . $subsection->section->slug . "/" . $subsection->slug;
            }
            else{
                $section = Section::where('id', $story->section_id)->first();
                $story->Asection = $section->name;
                $story->Aurl = "/section/" . $section->slug;
            }
        }

        // dd($sections);


        $minutes = 720;


        $latest =  Story::with(['section'])->latest('publish_date')->take(5)->get();


        // $latest = Cache::remember('latestStories', $minutes, function () {
        //     return Story::with(['section'])->latest('publish_date')->take(7)->get();
        // });

        
        //$latest = Story::with(['section'])->latest()->take(10)->get();

        // check WebFront.php for result
        // currently this will return every story with a unique priority... 7/28/2018
        $frontPageStories = WebFront::frontPage();

        foreach ($frontPageStories as $story) {
            
            if($story->subsection_id != 0){
                $subsection = SubSection::with(['section'])->where('id', $story->subsection_id)->first();
                $story->Asection = $subsection->name;
                $story->Aurl = "/section/" . $subsection->section->slug . "/" . $subsection->slug;
            }
            else{
                $section = Section::where('id', $story->section_id)->first();
                $story->Asection = $section->name;
                $story->Aurl = "/section/" . $section->slug;
            }
        }

        //dd($frontPageStories);

        // returns array of 2 cube ads & 1 banner ad
        // increases served counters
        $ads = AdRepository::cubesAndBanner(2,1);

        // gets latest issue model
        $issue = Issue::with(['layout'])->latest('id')->whereNotNull('issu_url')->first();

        //dd($ads);

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
        $stories = Story::latest('id')->offset($page * 20)->take(20)->get()->load(['writers']);
        $paginator = (new PublishDatePaginator($stories, Story::count()))->paginate(20, $page)->withPath('/stories');
        $ads = AdRepository::cubes(2);

        return view('stories.latest', compact('paginator', 'ads'));
    }

    public function graphics()
    {
        $page = 0;
        if(request()->has('page')) $page = request('page') - 1;
        $graphics = Graphic::latest('id')->offset($page * 20)->take(20)->get();

        $paginator = (new PublishDatePaginator($graphics, Graphic::count()))->paginate(20, $page)->withPath('/graphics');
//        dd($paginator);
        $ads = AdRepository::cubes(2);

        return view('graphics.index', compact('paginator', 'ads'));
    }

    public function layouts()
    {
        $page = 0;
        if(request()->has('page')) $page = request('page') - 1;
        $graphics = Layout::latest('id')->offset($page * 20)->take(20)->get();

        $paginator = (new PublishDatePaginator($graphics, Layout::count()))->paginate(20, $page, 'pub_date')->withPath('/layouts');
//        dd($paginator);
        $ads = AdRepository::cubes(2);

        return view('layout.index', compact('paginator', 'ads'));
    }

    public function photos()
    {
        $page = 0;
        if(request()->has('page')) $page = request('page') - 1;
        $graphics = Photo::latest('id')->offset($page * 20)->take(20)->get();

        $paginator = (new PublishDatePaginator($graphics, Photo::count()))->paginate(20, $page, 'pub_date')->withPath('/photos');
//        dd($paginator);
        $ads = AdRepository::cubes(2);

        return view('photos.index', compact('paginator', 'ads'));
    }
}
