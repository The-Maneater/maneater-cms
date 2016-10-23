<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
	protected $dates = ['campaignStart', 'campaignEnd'];

	protected $fillable = [
		'size', 'duration', 'purchaser', 'imageUrl', 'providerUrl', 'timesServed', 'campaignStart', 'campaignEnd'
	];

    public function serve(){
    	$this->timesServed++;
    	$this->save();
    }
}
