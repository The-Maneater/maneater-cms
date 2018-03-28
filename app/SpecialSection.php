<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SpecialSection extends Model
{
	protected $fillable = [
		'url', 'title', 'content','registration_required', 'template_location', 'comments_enabled'
	];

//    /**
//     * Returns the associated staffer
//     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
//     */
//	public function staffer(){
//		return $this->belongsToMany('App\Staffer');
//	}
}
