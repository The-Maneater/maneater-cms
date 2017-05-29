<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
use Spatie\Tags\HasTags;

class Photo extends Model
{
    use HasTags;
    use Searchable;
	protected $fillable = [
		'title',
        'description',
        'dateTaken',
        'location',
        'subjects',
        'publish_date',
        'section_id',
        'issue_id',
        'staffer_id'
	];

	protected $dates = ['dateTaken', 'publish_date'];

    /**
     * Returns the associated photographers
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function photographer(){
    	return $this->belongsTo('App\Staffer', 'staffer_id');
    }

    public function path()
    {
        if(preg_match('/^(http|https)/', $this->location)){
            return $this->location;
        }
        return 'media/'.$this->location;
    }

    /**
     * Returns the associated stories
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function stories(){
    	return $this->belongsToMany('App\Story');
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
     * Returns the associated section
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function issue()
    {
        return $this->belongsTo('App\Issue');
    }

    /**
     * Checks to see if the photo has the specified tag
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

}
