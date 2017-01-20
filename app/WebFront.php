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
     * Returns the stories for the front page
     * @return mixed
     */
    public static function frontPage()
    {
//        return Story::whereNotNull('front_page_webfront_priority')
//            ->orderBy('front_page_webfront_priority')
//            ->get()
//            ->keyBy('front_page_webfront_priority');
        return Story::whereHas('section', function($query){
            $publication = Publication::findByString('The Maneater');
            $query->where('publication_id', $publication->id);
        })->whereNotNull('front_page_webfront_priority')
            ->orderBy('front_page_webfront_priority')
            ->get()
            ->keyBy('front_page_webfront_priority');
    }

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

    public static function clearWebFront($section)
    {
        $frontPage = ($section == 0);
        $articles = ($section == 0) ? WebFront::frontPage(): WebFront::bySection($section);
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
