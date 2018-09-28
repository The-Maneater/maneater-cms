<?php

namespace App\Http\Controllers;

use App\Publication;
use App\Repositories\CacheRepository;
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
        $sections = Section::all()->load(['publication']);
        return view('admin.webfronts.list', compact('sections'));
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
        $spots = 5;
        switch ($section){
            case -1:
                $articles = Webfront::moveFrontPage();
                $sectionTitle = "MOVE";
                $sectionArticles = Story::whereHas('section', function($query){
                    $publication = Publication::findByString('MOVE');
                    $query->where('publication_id', $publication->id);
                })->orderBy('publish_date', 'DESC')->limit(25)->get();
                $spots = 4;
                break;

            case 0:
                $articles = WebFront::frontPage();
                $sectionTitle = "Front Page";
                $sectionArticles = Story::whereHas('section', function($query){
                    $publication = Publication::findByString('The Maneater');
                    $query->where('publication_id', $publication->id);
                })->orderBy('publish_date', 'DESC')->limit(25)->get();
                $spots = 8;
                break;

            default:
                $articles = WebFront::bySection($section);
                $section = Section::find($section);
                $sectionTitle = $section->name;
                $sectionArticles = $section
                    ->stories()
                    ->orderBy('publish_date', 'DESC')
                    ->limit(25)
                    ->get();
                break;
        }
        return view('admin.webfronts.show', compact('articles', 'sectionArticles', 'sectionTitle', 'spots'));
    }

    /**
     * @param Request $request
     * @param $section
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $section)
    {
        $frontPage = ($section == 0 || $section == -1);
        WebFront::clearWebFront($section);
        $articles = collect($request->input('articles'));
     
        $index = 0;
        //makes an array of the id's from the selected articles
        foreach($articles as $art)
        {
            $summ[$index] = $art;
            $index++;      
        }

        $summ = array_filter($summ);

        if($frontPage) {
            $numOfArticlesNeeded = 8 - sizeof($summ);
            $newArticles = Story::latest()->limit(8)->get();
        }
        else {
            $numOfArticlesNeeded = 5 - sizeof($summ);
            $newArticles = Story::latest()->where('section_id', $section)->limit(8)->get();
            dd($newArticles);
        }
      
        $i = 0;     //checks if recent articles are in the selected articles
        for($x = 1; $x <= $numOfArticlesNeeded; $x++){     
            while(in_array($newArticles[$i]->id, $summ)){
                $i++;
            }
            $summ[] = $newArticles[$i]->id;
        }

        $priority = 1;  //changes the webfront priority for the stories with id's in $summ
        for($j = 0; $j < sizeof($summ); $j++){
            $story = Story::find($summ[$j]);
            if($frontPage){
                $story->addToFrontPage($priority);
            }
            else{
                $story->addToSectionWebfront($priority);
            }
            
            $priority++;
        }

        $frontPage ? null : CacheRepository::updateSectionWebFront($section);
        return redirect("/admin/core/web-fronts");
    }
}
