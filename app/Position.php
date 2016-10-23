<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    protected $fillable = ['title', 'date_started', 'date_ended', 'isEdBoard'];

    protected $dates = ['dateStarted', 'dateEnded'];

    protected function staff(){
    	return $this->belongsToMany("App\Staffer");
    }
}
