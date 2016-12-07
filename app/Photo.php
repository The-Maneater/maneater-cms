<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
	protected $fillable = [
		'title', 'description', 'dateTaken', 'location', 'subjects', 'publish_date'
	];

	protected $dates = ['dateTaken', 'publish_date'];

    public function photographers(){
    	return $this->belongsToMany("App\Staffer");
    }

    public function tags(){
    	return $this->morphToMany('App\Tag', 'taggable');
    }

    public function stories(){
    	return $this->belongsToMany("App\Story");
    }


}
