<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Laravel\Scout\Searchable;
use Spatie\Tags\HasTags;

class Story extends Model
{
    use HasTags;
    use Searchable;
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
        'front_page_webfront_priority',
        'section_id',
        'issue_id'
	];

    protected $dates = [];

    protected $appends = ['formattedPublishDate'];

	//protected $with = ['photos', 'corrections', 'graphics', 'tags', 'writers', 'issue', 'section'];

    public function path()
    {
        return '/stories/' . $this->section->slug . '/' . $this->slug;
    }

    public function getFormattedPublishDateAttribute()
    {
        return Carbon::parse($this->publish_date);
    }

    /**
     * Finds the story with the associated story slug and section slug
     * @param $sectionSlug
     * @param $slug
     * @return Model|null|static
     */
    static function findBySectionAndSlug($sectionSlug, $slug){
    	$section = Section::where('slug', '=', $sectionSlug)->first();
    	$sectionID = $section->id;
    	return Story::where('section_id', '=', $sectionID)->where('slug', '=', $slug)->first();
    }

    /**
     * Returns the associated photos
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function photos(){
    	return $this->belongsToMany('App\Photo');
    }

    /**
     * Returns the associated corrections
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function corrections(){
    	return $this->hasMany('App\Correction');
    }

    /**
     * Returns the associated graphics
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function graphics(){
    	return $this->belongsToMany('App\Graphic');
    }

    /**
     * Returns the associated staffers
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function writers(){
    	return $this->belongsToMany('App\Staffer');
    }

    /**
     * Returns the associated issue
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function issue(){
    	return $this->belongsTo('App\Issue');
    }

    /**
     * Returns the associated section
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function section()
    {
       return $this->belongsTo('App\Section');
    }

    /**
     * Adds the story to its section webfront
     * @param $priority
     */
    public function addToSectionWebfront($priority){
        $this->section_webfront_priority = $priority;
        $this->save();
    }

    /**
     * Adds the story to the front page
     * @param $priority
     */
    public function addToFrontPage($priority){
        $this->front_page_webfront_priority = $priority;
        $this->save();
    }

    /**
     * Generates the searchable attributes for the mysql scout driver
     * @return array
     */
    public function toSearchableArray()
    {
        $array = $this->toArray();

        return $array;
    }

    /**
     * Checks to see if the specified tag exists
     * @param $tag
     * @return string
     */
    public function tagExists($tag)
    {
        $exists = $this->tags->contains(function($value, $key) use ($tag){
            return $value->name == $tag;
        });
        return $exists ? "selected" : "";
    }

    /**
     * Returns the associated header photos
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function headerPhotos()
    {
        return $this->photos()
            ->wherePivot('type', 'header');
    }

    /**
     * Returns the associated inline photos
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function inlinePhotos()
    {
        return $this->photos()
            ->wherePivot('type', 'inline')
            ->withPivot('reference');
    }


}
