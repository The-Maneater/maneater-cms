<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    protected $fillable = ['title', 'is_editorial_board', 'is_exec', 'priority'];

    protected function staff(){
    	return $this->belongsToMany('App\Staffer');
    }

    public static function findByTitle($title)
    {
        return Position::where('title', '=', $title)->first();
    }
}
