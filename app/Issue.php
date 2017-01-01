<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
    protected $fillable = [
    	'issue_number'
    ];

    protected $with = ['volume'];

    public function stories(){
    	return $this->hasMany('App\Story');
    }

    public function volume(){
    	return $this->belongsTo('App\Volume');
    }
}
