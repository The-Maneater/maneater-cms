<?php

namespace App\Http\Controllers;

use App\Graphic;
use App\Photo;
use App\Repositories\SearchRepository;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;


class SearchController extends Controller
{
    public function show(SearchRepository $repository)
    {
        $type = request('type');
        $search = request('search');
        $page = 0;
        if(request()->has('page')) $page = request('page');
        //dd($page);
        $results = $repository->{$type}($search);
        if(! $results instanceof LengthAwarePaginator){
            //$paginatedResults = collect(array_slice($results->toArray(), 25 * $page, 25, true));
            $paginatedResults = $results->slice(25 * $page, 25);
            $results = (new LengthAwarePaginator($paginatedResults, count($results), 25, $page))->withPath("search");
        }
        return view('search.index', compact('results', 'search', 'type'));

    }

    public function photosRaw()
    {
        $search = request('q');
        $page = 0;
        if(request()->has('page')) $page = request('page') - 1;
        // $results = Photo::search($search)->within('title')->get()
        //     ->load(['section']);

        $results = Photo::where('title','like','%'.$search.'%')->get()
            ->load(['section']);

        if(! $results instanceof LengthAwarePaginator){
            ////$paginatedResults = collect(array_slice($results->toArray(), 25 * $page, 25, true));
            $paginatedResults = $results->slice(25 * $page, 25);
            $results = new LengthAwarePaginator($paginatedResults, count($results), 25, $page);
        }
        return $results;
    }

    public function graphicsRaw()
    {
        $search = request('q');
        $page = 0;
        if(request()->has('page')) $page = request('page') - 1;
        $results = Graphic::search($search)->get()
            ->load(['section'])
            ->filter(function ($story){
                return $story->section->publication_id === 1;
            });

        if(! $results instanceof LengthAwarePaginator){
            //$paginatedResults = collect(array_slice($results->toArray(), 25 * $page, 25, true));
            $paginatedResults = $results->slice(25 * $page, 25);
            $results = new LengthAwarePaginator($paginatedResults, count($results), 25, $page);
        }
        return $results;
    }
}
