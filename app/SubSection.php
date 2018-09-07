<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class SubSection extends Model
{
    use Sluggable, Searchable;

    protected $fillable = [
    	'name', 'slug'
    ];

    /*
		Returns the associated stories
		@return \Illuminate\Database\Eloquent\Relations\HasMany
    */
	public function stories(){
		return $this->hasMany('App\Story');
	}

    public function section(){
        return $this->belongsTo(Section::class);
    }

	//this slug will include the section (sports, news)
	public function path(){	
		return '/section/' . $this->slug . '/' . $this->subSection;
	}

    /**
     * Finds a story by slug
     * @param $subSection
     * @return Model|null|static
     */
    public static function findBySubSection($subSection){
    	return SubSection::where('slug', '=', $subSection)->first();
    }


    /**
     * @return mixed
     */
    public function latestStories()
    {
        return $this->stories()
            ->with('section')
            ->orderBy('publish_date', 'DESC')
            ->take(6);
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
            ->limit(5)
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
