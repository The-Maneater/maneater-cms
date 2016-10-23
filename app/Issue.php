<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
    protected $fillable = [
    	'issueNumber', 'volumeNumber'
    ];

    public function stories(){
    	return $this->hasMany("App\Story");
    }
}
