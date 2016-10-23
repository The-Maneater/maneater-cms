<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Graphic extends Model
{
    protected $fillable = [
    	'title', 'description', 'link'
    ];

    public function designer(){
    	return $this->belongsToMany("App\Staffer");
    }
}
