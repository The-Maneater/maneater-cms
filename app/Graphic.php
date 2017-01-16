<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Graphic extends Model
{
    protected $fillable = [
    	'title', 'description', 'link', 'publish_date', 'static_byline'
    ];

    protected $dates = ['publish_date'];

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
}
