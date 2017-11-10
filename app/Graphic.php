<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Graphic extends Model
{
    use Searchable;
    protected $fillable = [
    	'title', 'description', 'link', 'publish_date', 'static_byline'
    ];

    protected $dates = ['publish_date'];

    public function path()
    {
        return '/graphics/' . $this->id;
    }

    public function linkPath()
    {
        return 'http://themaneater.com/media/'.$this->link;
    }

    /**
     * Returns the associated staffers
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function staffer(){
    	return $this->belongsTo(Staffer::class);
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
     * Returns the associated section
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function section()
    {
        return $this->belongsTo(Section::class);
    }

    public function getNameAttribute()
    {
            return pathinfo($this->link)['filename'];
    }

    /**
     * Generates the searchable attributes for the mysql scout driver
     * @return array
     */
    public function toSearchableArray()
    {
        $array = $this->toArray();
        unset($array['link']);

        return $array;
    }


}
