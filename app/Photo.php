<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Tags\HasTags;

class Photo extends Model
{
    use HasTags;
	protected $fillable = [
		'title', 'description', 'dateTaken', 'location', 'subjects', 'publish_date'
	];

	protected $dates = ['dateTaken', 'publish_date'];

    public function photographers(){
    	return $this->belongsToMany('App\Staffer');
    }

//    public function tags(){
//    	return $this->morphToMany('App\Tag', 'taggable');
//    }

    public function stories(){
    	return $this->belongsToMany('App\Story');
    }


}
