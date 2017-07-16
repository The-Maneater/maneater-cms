<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Event extends Model
{
    use Searchable;

    protected $fillable = [
        'name',
        'summary',
        'description',
        'start_date',
        'end_date',
        'allday',
        'location'
    ];

    public function toSearchableArray()
    {
        $array = $this->toArray();
        unset($array['location']);

        return $array;
    }


    protected $casts = ['allday' => 'boolean'];

    protected $dates = ['start_date', 'end_date'];
}
