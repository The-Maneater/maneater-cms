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
use Illuminate\Database\Eloquent\Collection;

class StoryRepository
{
    public static function getFrontPageSectionStories()
    {
        $campus = Section::findBySlug('campus')->latestStories()->get();
        $unews = Section::findBySlug('unews')->latestStories()->get();
        $sports = Section::findBySlug('sports')->latestStories()->get();
        $projects = Section::findBySlug('projects')->latestStories()->get();
        $opinion = Section::findBySlug('opinion')->latestStories()->get();

//        $sections = new Collection([
//            'campus' => $campus,
//            'unews' => $unews,
//            'sports' => $sports,
//            'projects' => $projects,
//            'opinion' => $opinion
//        ]);
//        $sections->load(['latestStories']);

        $move = Story::whereHas('section', function($query){
            $query->where('publication_id', 2);
        })->take(6)->get()->load(['section']);

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