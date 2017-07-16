<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Layout extends Model
{
    use Searchable;

    protected $fillable = [
    	'title', 'link', 'date_published'
    ];

    protected $dates = ['date_published'];

    /**
     * Returns the associated staffer
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function staffer(){
    	return $this->belongsTo('App\Staffer');
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
