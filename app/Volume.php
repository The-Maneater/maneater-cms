<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Volume extends Model
{
    use Searchable;

    protected $fillable = [
    	'name', 'first_issue_date', 'period', 'publication'
    ];

    protected $dates = ['first_issue_date'];

    /**
     * Returns the associated issues
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function issues(){
    	return $this->hasMany('App\Issue');
    }

    public function toSearchableArray()
    {
        $array = $this->toArray();
        unset($array['period']);

        return $array;
    }


}
