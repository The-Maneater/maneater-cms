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
//        $campus = Section::findBySlug('campus')->latestStories()->get();
//        $unews = Section::findBySlug('uwire')->latestStories()->get();
        $sports = Section::findBySlug('sports')->latestStories()->get();
        $projects = Section::findBySlug('projects')->latestStories()->get();
        $opinion = Section::findBySlug('opinion')->latestStories()->get();
        $campus = Section::findBySlug('campus');
        $unews = Section::findBySlug('uwire');
        $news = Story::whereIn('section_id', [$campus->id, $unews->id])
            ->with('section')
            ->orderBy('publish_date', 'DESC')
            ->take(6)
            ->get();



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
        })->orderBy('publish_date', 'DESC')->take(6)->get()->load(['section']);

        return [
          'news' => $news,
          'sports' => $sports,
          'projects' => $projects,
          'opinion' => $opinion,
          'move' => $move
        ];
    }
}