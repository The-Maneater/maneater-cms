<?php

namespace App\Http\Controllers;

use App\WebFront;
use App\Story;
use App\Section;
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
        $sectionArticles = ($section == 0) ? Story::orderBy('publish_date')->limit(15)->get() : Section::find($section)->stories()->orderBy('publish_date')->limit(15)->get();
        return view('admin.webfronts.show', compact('articles', 'sectionArticles'));
    }

    /**
     * @param Request $request
     * @param $section
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $section)
    {
        $frontPage = $section == 0;
        WebFront::clearWebFront($section);
        $articles = collect($request->input('articles'));
        $articles->each(function($story, $priority) use($frontPage){
            /** @var \App\Story $story */
            $story = Story::find((int)$story);
            if($frontPage){
                $story->addToFrontPage($priority);
            }else{
                $story->addToSectionWebfront($priority);
            }
        });
        return redirect("/admin/core/web-front");
    }
}
