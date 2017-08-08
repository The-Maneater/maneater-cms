<?php
/**
 * Created by PhpStorm.
 * User: Michael
 * Date: 8/7/17
 * Time: 8:00 PM
 */

namespace App\Repositories;


use App\Graphic;
use App\Photo;
use App\Staffer;
use App\Story;

class MoveSearchRepository
{
    public function articles($search)
    {
        return Story::search($search)->orderBy('publish_date', 'DESC')
            ->get()
            ->load(['section'])
            ->filter(function ($story){
                return $story->section->publication_id === 2;
            });
    }

    public function photos($search)
    {
        return Photo::search($search)->get()
            ->load(['section'])
            ->filter(function ($story){
                return $story->section->publication_id === 2;
            });
    }

    public function staff($search)
    {
        return Staffer::search($search)->paginate(25);
    }

    public function graphics($search)
    {
        return Graphic::search($search)->load(['section'])
            ->get()
            ->filter(function ($story){
                return $story->section->publication_id === 2;
            });
    }
}