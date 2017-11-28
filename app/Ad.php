<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Ad extends Model
{
    use Searchable;

	protected $dates = ['campaign_start', 'campaign_end'];

	protected $fillable = [
		'size',
        'duration',
        'purchaser',
        'image_url',
        'provider_url',
        'times_served',
        'campaign_start',
        'campaign_end'
	];

    /**
     * Increases the number of times an ad has been served
     */
    public function serve(){
    	$this->times_served++;
    	$this->save();
    }

    public function url()
    {
        return "http://themaneater.com/media/" . $this->image_url;
    }

    public function toSearchableArray()
    {
        $array = $this->toArray();
        unset($array['duration']);
        unset($array['image_url']);
        unset($array['provider_url']);

        return $array;
    }


    /**
     * Creates a query to retrieve only active ads
     * @param Builder $builder
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeActive(Builder $builder)
    {
        $c = Carbon::now()->toDateTimeString();
        //where([['campaign_start', '<=', $c],['campaign_end', '>=', $c]])
        /*return $builder->where('campaign_start', '<=', Carbon::now()->toDateString())
           ->where('campaign_end', '>=', Carbon::now()->toDateString());*/
        return $builder->where([
            ['campaign_start', '<=', $c],
            ['campaign_end', '>=', $c]
        ]);
    }

    public function scopeCube(Builder $builder)
    {
        return $builder->where('size', 'cube');
    }

    public function scopeBanner(Builder $builder)
    {
        return $builder->where('size', 'banner');
    }

    public function provider()
    {
        if(preg_match('/^(http|https)/', $this->location)){
            return $this->provider_url;
        }

        return "http://" . $this->provider_url;
    }
}
