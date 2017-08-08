<?php

namespace App\Http\Controllers;

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
        if(request()->has('page')) $page = request('page') - 1;
        $results = $repository->{$type}($search);
        if(! $results instanceof LengthAwarePaginator){
            //$paginatedResults = collect(array_slice($results->toArray(), 25 * $page, 25, true));
            $paginatedResults = $results->slice(25 * $page, 25);
            $results = new LengthAwarePaginator($paginatedResults, count($results), 25, $page);
        }
        return view('search.index', compact('results', 'search', 'type'));

    }
}
