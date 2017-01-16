<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'name',
        'summary',
        'description',
        'start_date',
        'end_date',
        'allday',
        'location'
    ];

    protected $casts = ['allday' => 'boolean'];

    protected $dates = ['start_date', 'end_date'];
}
