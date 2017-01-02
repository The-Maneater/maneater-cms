<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
	protected $fillable = [
		'title', 'slug'
	];

    public function stories(){
    	return $this->hasMany('App\Story');
    }

    public static function findBySlug($slug){
    	return Section::where('slug', '=', $slug)->first();
    }

    public function clearWebFront(){
        $this->stories()
        ->whereNotNull('section_webfront_priority')
        ->update(['section_webfront_priority' => NULL]);
    }
}
