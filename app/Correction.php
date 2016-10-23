<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Correction extends Model
{
	protected $fillable = [
		'storyId', 'date', 'content'
	];

	protected $dates = ['date'];

	public function story(){
		return $this->belongsTo('App\Story');
	}
}
