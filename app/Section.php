<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{

	protected $with = ['stories'];
    public function stories(){
    	return $this->hasMany("App\Story");
    }

    public static function findBySlug($slug){
    	return Section::where('slug', '=', $slug)->first();
    }
}
