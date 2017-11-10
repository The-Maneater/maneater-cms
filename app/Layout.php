<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Layout extends Model
{
    use Searchable;

    protected $fillable = [
    	'title', 'link', 'date_published', 'img_link'
    ];

    protected $dates = ['date_published'];

    public function path()
    {
        return "http://themaneater.com/media/" . $this->link;
    }

    /**
     * Returns the associated staffer
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function staffers(){
    	return $this->belongsToMany('App\Staffer');
    }

    /**
     * Returns the associated issue
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function issue()
    {
        return $this->belongsTo(Issue::class);
    }

    /**
     * Returns the associated photos
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function photos()
    {
        return $this->belongsToMany(Photo::class);
    }

    /**
     * Returns the associated stories
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function stories()
    {
        return $this->belongsToMany(Story::class);
    }

    /**
     * Returns the associated graphics
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function graphics()
    {
        return $this->belongsToMany(Graphic::class);
    }

    /**
     * Returns the associated section
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function section()
    {
        return $this->belongsTo(Section::class);
    }

    public function toSearchableArray()
    {
        $array = $this->toArray();
        unset($array['link']);

        return $array;
    }


}
