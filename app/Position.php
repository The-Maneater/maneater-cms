<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    protected $fillable = ['title', 'is_editorial_board', 'is_exec'];

    protected function staff(){
    	return $this->belongsToMany("App\Staffer");
    }
}
