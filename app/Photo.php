<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Tags\HasTags;

class Photo extends Model
{
    use HasTags;
	protected $fillable = [
		'title', 'description', 'dateTaken', 'location', 'subjects', 'publish_date', 'section_id', 'issue_id', 'staffer_id'
	];

	protected $dates = ['dateTaken', 'publish_date'];

    public function photographers(){
    	return $this->belongsToMany('App\Staffer');
    }

    public function stories(){
    	return $this->belongsToMany('App\Story');
    }

    public function section()
    {
        return $this->belongsTo('App\Section');
    }

    public function issue()
    {
        return $this->belongsTo('App\Issue');
    }

}
