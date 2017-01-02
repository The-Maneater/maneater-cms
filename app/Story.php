<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\Interfaces\HasMedia;
use Spatie\Tags\HasTags;

class Story extends Model
{
    use HasTags;
	protected $fillable = [
		'slug',
		'runsheet_slug',
		'title',
		'issue',
		'publish_date',
		'cDeck',
		'static_byline',
		'section',
		'body',
		'priority',
        'section_webfront_priority',
        'front_page_webfront_priority'
	];

    protected $dates = ['publish_date'];

	protected $with = ['photos', 'corrections', 'graphics', 'tags', 'writers', 'issue', 'section'];

    static function findBySectionAndSlug($sectionSlug, $slug){
    	$section = Section::where('slug', '=', $sectionSlug)->first();
    	$sectionID = $section->id;
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

    public function writers(){
    	return $this->belongsToMany('App\Staffer');
    }

    public function issue(){
    	return $this->belongsTo('App\Issue');
    }

    public function section()
    {
       return $this->belongsTo('App\Section');
    }

    public function addToSectionWebfront($priority){
        $this->section_webfront_priority = $priority;
        $this->save();
    }

    public function addToFrontPage($priority){
        $this->front_page_webfront_priority = $priority;
        $this->save();
    }
}
