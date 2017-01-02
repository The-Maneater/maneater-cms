<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
    protected $fillable = [
    	'issue_number'
    ];

    protected $with = ['volume'];

    public function getIssueNameAttribute()
    {
        return 'Maneater v. ' . $this->volume->name . ', Issue ' . $this->issue_number;
    }

    public function stories(){
    	return $this->hasMany('App\Story');
    }

    public function volume(){
    	return $this->belongsTo('App\Volume');
    }
}
