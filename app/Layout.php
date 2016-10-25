<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Layout extends Model
{
    protected $fillable = [
    	'title', 'link'
    ];

    public function staffer(){
    	return $this->belongsTo('App\Staffer');
    }
}
