<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
	protected $fillable = [
		'title', 'slug'
	];

    /**
     * Returns the associated stories
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function stories(){
    	return $this->hasMany('App\Story');
    }

    /**
     * Finds a story by slug
     * @param $slug
     * @return Model|null|static
     */
    public static function findBySlug($slug){
    	return Section::where('slug', '=', $slug)->first();
    }

    /**
     * Clears all stories from the web front
     */
    public function clearWebFront(){
        $this->stories()
        ->whereNotNull('section_webfront_priority')
        ->update(['section_webfront_priority' => NULL]);
    }
}
