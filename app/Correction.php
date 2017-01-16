<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Correction extends Model
{
	protected $fillable = [
		'storyId', 'date', 'content'
	];

	protected $dates = ['date'];

    /**
     * Returns the associated story
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
	public function story(){
		return $this->belongsTo('App\Story');
	}
}
