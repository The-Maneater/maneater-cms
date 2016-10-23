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

	protected $with = ['photos', 'corrections', 'graphics', 'tags', 'writers', 'issue'];

    static function findBySectionAndSlug($sectionSlug, $slug){
    	$section = Section::where('slug', '=', $sectionSlug)->first();
    	$sectionID = $section->id;
    	//dd($section);
    	return Story::where('section_id', '=', $sectionID)->where('slug', '=', $slug)->first();
    }

    public function photos(){
    	return $this->belongsToMany('App\Photo');
    }

    public function corrections(){
    	return $this->hasMany('App\Correction');
    }

    public function graphics(){
    	return $this->belongsToMany('App\Graphic');
    }

    public function tags(){
    	return $this->morphToMany('App\Tag', 'taggable');
    }

    public function writers(){
    	return $this->belongsToMany("App\Staffer");
    }

    public function issue(){
    	return $this->belongsTo('App\Issue');
    }
}