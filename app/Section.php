<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use Sluggable;

	protected $fillable = [
		'name', 'slug'
	];

    /**
     * Returns the associated stories
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function stories(){
    	return $this->hasMany('App\Story');
    }

    public function publication()
    {
        return $this->belongsTo(Publication::class);
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

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}
