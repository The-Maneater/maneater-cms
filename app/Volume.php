<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Volume extends Model
{
    protected $fillable = [
    	'name', 'first_issue_date', 'period', 'publication'
    ];

    /**
     * Returns the associated issues
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function issues(){
    	return $this->hasMany('App\Issue');
    }
}
