<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Classified extends Model
{
    protected $fillable = [
    	'section', 'start_date', 'end_date', 'content'
    ];

    protected $dates = [
    	'start_date', 'end_date'
    ];

    /**
     * Updates the query to return only active classifieds
     * @param Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeActive(Builder $query)
    {
        return $query->where('start_date', '>=', Carbon::now())
            ->where('end_date', '<=', Carbon::now());
    }
}
