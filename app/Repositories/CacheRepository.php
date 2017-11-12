<?php
/**
 * Created by PhpStorm.
 * User: Michael
 * Date: 8/28/17
 * Time: 12:18 PM
 */

namespace App\Repositories;


use App\Section;
use App\Staffer;
use App\Story;
use Illuminate\Support\Facades\Cache;

class CacheRepository
{
    public static function updateLatestStories()
    {
        $stories = Story::with(['section'])->latest('id')->take(10)->get();
        Cache::put('latestStories', $stories, 720);
    }

    public static function updateEditorialBoard()
    {
        $staffers = Staffer::with(['edBoardPositions'])->whereHas('edBoardPositions', function($p){
            $p->where('current', true);
        })->get()
            ->sortBy(function($item, $key){
                return $item->edBoardPositions()->where('current', true)->first()->priority;
            })
            ->values();
        Cache::put('editorialBoard', $staffers, 720);
    }

    public static function updateSectionTopTags($story)
    {
        Cache::put('section.' . $story->section->slug . '.latest-tags', $story->section->latestTags(), 720);
    }

    public static function updateSectionWebFront($section)
    {
        $stories = null;
        if($section instanceof Section){
            $stories = $section->webFrontStories()->get();
        }else if(is_numeric($section)){
            $section = Section::find($section);
            $stories = $section->webFrontStories()->get();
        }
        Cache::put('section.' . $section->slug . ".web-front-stories", $stories, 720);
    }
}