<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WebFront extends Model
{
    public static function bySection($sectionID)
    {
        $section = Section::findOrFail($sectionID);
        return $section->stories()
            ->whereNotNull('section_webfront_priority')
            ->orderBy('section_webfront_priority')
            ->get()
            ->keyBy('section_webfront_priority');
    }

    public static function frontPage()
    {
        return Story::whereNotNull('front_page_webfront_priority')
            ->orderBy('front_page_webfront_priority')
            ->get()
            ->keyBy('front_page_webfront_priority');
    }

}
