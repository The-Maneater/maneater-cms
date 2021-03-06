<?php

namespace App\Http\Controllers;

use App\Flatpage;
use App\Repositories\MoveSearchRepository;
use App\Repositories\SearchRepository;
use App\Section;
use App\Staffer;
use App\Story;
use App\WebFront;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class MoveController extends Controller
{
    public function index()
    {
        $articles = Webfront::moveFrontPage();
        $latestStories = Story::orderBy('id', 'DESC')
            ->take(100)
            ->get()
            ->load(['section'])
            ->filter(function ($story){
                return $story->section->publication_id === 2;
            })
            ->take(10);
        //dd($articles);
        //dd($latestStories);

        return view('move.index', compact('articles', 'latestStories'));
    }

    public function section($slug)
    {
        $section = Section::where('publication_id', 2)->where('slug', $slug)->first();
        if(!$section){
            throw new ModelNotFoundException;
        }
        $stories = $section->stories()->latest('id')->paginate(20);
        return view('move.section', compact('section', 'stories'));
    }

    public function allStaff()
    {
        $staff = Staffer::orderBy('first_name')->paginate(75);

        return view('move.staff.all', compact('staff'));
    }

    public function staffShow($slug)
    {
        $staffer = Staffer::findBySlug($slug);

        return view('move.staff.show', compact('staffer'));
    }

    public function storyShow($section, $slug)
    {
        $story = Story::findBySectionAndSlug($section, $slug);
        // $relatedArticles = Story::withAnyTags($story->tags)
        //     ->inRandomOrder()
        //     ->take(5)
        //     ->get();
        $relatedArticles = count($story->tags) > 0 ?
        Story::withAllTags([$story->tags[0]])
            ->orderBy('id', 'DESC')
            ->take(5)
            ->get()
            ->load(['section']) : collect();

        return view('move.story', compact('story', 'relatedArticles'));
    }

    public function search(MoveSearchRepository $repository)
    {
        $type = request('type');
        $search = request('search');
        $page = 0;
        if(request()->has('page')) $page = request('page') - 1;
        $results = $repository->{$type}($search);
        if(! $results instanceof LengthAwarePaginator){
            //$paginatedResults = collect(array_slice($results->toArray(), 25 * $page, 25, true));
            $paginatedResults = $results->slice(15 * $page, 15);
            $results = new LengthAwarePaginator($paginatedResults, count($results), 15, $page+1);
            $results->withPath('search');
        }
        return view('move.search.show', compact('results', 'search', 'type'));
    }

    public function flatpage($param)
    {
        $flatpage = Flatpage::where('path', $param)->firstOrFail();
        return view('move.flatpage', compact('flatpage'));
    }
}
