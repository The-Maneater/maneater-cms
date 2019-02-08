<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WebFront extends Model
{
    /**
     * Returns the stories for a section web front
     * @param $sectionID
     * @return mixed
     */
    public static function bySection($sectionID)
    {
        return Section::findOrFail($sectionID)->stories()
            ->whereNotNull('section_webfront_priority')
            ->orderBy('section_webfront_priority')
            ->get()
            ->keyBy('section_webfront_priority');
    }

    /**
     * Returns the stories for the front page for the maneater
     * @return mixed
     */
    public static function frontPage()
    {

        // loads story photo if story->type == header
        // gets story if it has relationship with a section and section's publication_id column matches the publication id of The Maneater from the Publications table
        // story->front_page_webfront_priority cannot equal null
        // results orderedBy front_page_webfront_priority asc
        // loads corresponding section row from Sections table
        // sets result's key to front_page_webfront_priority
        return Story::with('headerPhotos')->whereHas('section', function($query){
            $publication = Publication::findByString('The Maneater');
            $query->where('publication_id', $publication->id);
        })->whereNotNull('front_page_webfront_priority')
            ->orderBy('front_page_webfront_priority')
            ->get()
            ->load(['section'])
            ->keyBy('front_page_webfront_priority');
    }

    /**
     * Returns the stories for the move front page
     * @return \Illuminate\Support\Collection
     */
    public static function moveFrontPage()
    {
        return Story::whereHas('section', function($query){
            $publication = Publication::findByString('MOVE');
            $query->where('publication_id', $publication->id);
        })->whereNotNull('front_page_webfront_priority')
            ->orderBy('front_page_webfront_priority')
            ->get()
            ->keyBy('front_page_webfront_priority');
    }

    /**
     * Clears all stories from the specified web front
     * @param $section
     */
    public static function clearWebFront($section)
    {
        $frontPage = ($section == 0) || ($section == -1);
        switch ($section){
            case -1:
                $articles = Webfront::moveFrontPage();
                break;

            case 0:
                $articles = WebFront::frontPage();
                break;

            default:
                $articles = WebFront::bySection($section);
                break;
        }
        $articles->each(function($item, $key) use($frontPage){
            /** @var \App\Story $item  */
           if($frontPage){
               $item->addToFrontPage(null);
           }else{
               $item->addToSectionWebfront(null);
           }
        });
    }
}
