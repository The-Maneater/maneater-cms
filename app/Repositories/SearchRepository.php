<?php
/**
 * Created by PhpStorm.
 * User: Michael
 * Date: 7/13/17
 * Time: 10:30 PM
 */

namespace App\Repositories;


use App\Graphic;
use App\Photo;
use App\Staffer;
use App\Story;

class SearchRepository
{
    public function articles($search)
    {
        return Story::search($search)->orderBy('publish_date', 'DESC')->paginate(25);
    }

    public function photos($search)
    {
        return Photo::search($search)->paginate(25);
    }

    public function staff($search)
    {
        return Staffer::search($search)->paginate(25);
    }

    public function graphics($search)
    {
        return Graphic::search($search)->paginate(25);
    }
}