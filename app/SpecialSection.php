<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SpecialSection extends Model
{
	protected $fillable = [
		'url','slug', 'title', 'site', 'registrationRequired', 'templateLocation'
	];

	public function designer(){
		return $this->belongsToMany("App\Staffer");
	}
}
