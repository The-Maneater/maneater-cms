<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
	protected $dates = ['campaign_start', 'campaign_end'];

	protected $fillable = [
		'size', 'duration', 'purchaser', 'image_url', 'provider_url', 'times_served', 'campaign_start', 'campaign_end'
	];

    /**
     * Increases the number of times an ad has been served
     */
    public function serve(){
    	$this->times_served++;
    	$this->save();
    }

    /**
     * Creates a query to retrieve only active ads
     * @param Builder $builder
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeActive(Builder $builder)
    {
        return $builder->where('campaign_start', '<=', Carbon::now()->toDateString())
           ->where('campaign_end', '>=', Carbon::now()->toDateString());
    }
}
