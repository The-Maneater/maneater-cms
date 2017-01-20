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
        return Story::whereHas('section', function($query){
            $publication = Publication::findByString('The Maneater');
            $query->where('publication_id', $publication->id);
        })->whereNotNull('front_page_webfront_priority')
            ->orderBy('front_page_webfront_priority')
            ->get()
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
