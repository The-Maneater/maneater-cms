<?php
/**
 * Created by PhpStorm.
 * User: Michael
 * Date: 8/27/17
 * Time: 4:38 PM
 */

namespace App\Repositories;


use App\Section;
use App\Story;

class StoryRepository
{
    public static function getFrontPageSectionStories()
    {
        $campus = Section::findBySlug('campus')->latestStories()->get()->take(6);
        $unews = Section::findBySlug('unews')->latestStories()->get()->take(6);
        $sports = Section::findBySlug('sports')->latestStories()->get()->take(6);
        $projects = Section::findBySlug('projects')->latestStories()->get()->take(6);
        $opinion = Section::findBySlug('opinion')->latestStories()->get()->take(6);

        $move = Story::whereHas('section', function($query){
            $query->where('publication_id', 2);
        })->take(6)->get();

        return [
          'campus' => $campus,
          'unews' => $unews,
          'sports' => $sports,
          'projects' => $projects,
          'opinion' => $opinion,
          'move' => $move
        ];
    }
}