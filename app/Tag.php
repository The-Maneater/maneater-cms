<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
	protected $fillable = [
		'name'
	];

    public function taggable(){
    	return $this->morphTo();
    }

    public function stories(){
    	return $this->morphedByMany('App\Story', 'taggable');
    }

    public function photos(){
    	return $this->morphedByMany('App\Photo', 'taggable');
    }
}
