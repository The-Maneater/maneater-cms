<?php

namespace App\Http\Controllers;

use App\Repositories\SearchRepository;
use Illuminate\Http\Request;


class SearchController extends Controller
{
    public function show(SearchRepository $repository)
    {
        $type = request('type');
        $search = request('search');
        $results = $repository->{$type}($search);
        return view('search.index', compact('results', 'search', 'type'));

    }
}
