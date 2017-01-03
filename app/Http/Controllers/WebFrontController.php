<?php

namespace App\Http\Controllers;

use App\WebFront;
use Illuminate\Http\Request;

use App\Http\Requests;

class WebFrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.webfronts.list');
    }

    /**
     * Display the specified resource.
     *
     * @param $section
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function show($section)
    {
        $articles = ($section == 0) ? WebFront::frontPage(): WebFront::bySection($section);
        return view('admin.webfronts.show', compact('articles'));
    }
}
