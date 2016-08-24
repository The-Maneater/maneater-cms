<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Story extends Model
{
	protected $fillable = [
		'slug',
		'runsheet_slug',
		'title',
		'issue',
		'publish_date',
		'cDeck',
		'byline',
		'static_byline',
		'section',
		'body',
		'priority'
	];

    private $graphics = [];

    private $tags = [];

    private $corrections = [];

    static function findBySectionAndSlug($sectionSlug, $slug){
    	$section = Section::where('slug', '=', $sectionSlug)->first();
    	$sectionID = $section->id;
    	//dd($section);
    	return Story::where('section', '=', $sectionID)->where('slug', '=', $slug)->first();
    }

    public function photos(){
    	return $this->hasMany('App\Photo');
    }
}
