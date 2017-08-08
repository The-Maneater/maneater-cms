<?php

namespace App\Http\Controllers;

use App\Repositories\MoveSearchRepository;
use App\Repositories\SearchRepository;
use App\Section;
use App\Staffer;
use App\Story;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class MoveController extends Controller
{
    public function index()
    {
        return view('move.index');
    }

    public function section($slug)
    {
        $section = Section::where('publication_id', 2)->where('slug', $slug)->first();
        if(!$section){
            throw new ModelNotFoundException;
        }
        $stories = $section->stories()->paginate(20);
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

        return view('move.story', compact('story'));
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
}
