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
        return Story::whereNotNull('front_page_webfront_priority')
            ->orderBy('front_page_webfront_priority')
            ->get()
            ->keyBy('front_page_webfront_priority');
    }

}
