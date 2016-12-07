<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classified extends Model
{
    protected $fillable = [
    	'section', 'start_date', 'end_date', 'content'
    ];

    protected $dates = [
    	'start_date', 'end_date'
    ];
}
