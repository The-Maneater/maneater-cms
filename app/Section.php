<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Section extends Model
{
    use Sluggable, Searchable;

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

    public function path()
    {
        return '/section/' . $this->slug;
    }

    /**
     * Returns the associated publication
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
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

    public function latestStories()
    {
        return $this->stories()
            ->with('section')
            ->latest();
    }

    /**
     * Clears all stories from the web front
     */
    public function clearWebFront(){
        $this->stories()
        ->whereNotNull('section_webfront_priority')
        ->update(['section_webfront_priority' => NULL]);
    }

    public function webFrontStories()
    {
        return $this->stories()
            ->whereNotNull('section_webfront_priority')
            ->orderBy('section_webfront_priority');
    }

    /**
     * Generates the slug
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}
