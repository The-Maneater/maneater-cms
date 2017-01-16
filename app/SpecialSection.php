<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SpecialSection extends Model
{
	protected $fillable = [
		'url','slug', 'title', 'site', 'registrationRequired', 'templateLocation'
	];

    /**
     * Returns the associated staffer
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
	public function staffer(){
		return $this->belongsToMany('App\Staffer');
	}
}
