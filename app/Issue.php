<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
    protected $fillable = [
    	'issue_number'
    ];

    protected $with = ['volume'];

    /**
     * Creates an attribute that formats the name of the issue
     * with the volume in it
     * @return string
     */
    public function getIssueNameAttribute()
    {
        return 'Maneater v. ' . $this->volume->name . ', Issue ' . $this->issue_number;
    }

    /**
     * Creates a directory name for the issue
     * @return string
     */
    public function getDirNameAttribute()
    {
        return 'volume' . $this->volume->name . '-issue' . $this->issue_number;
    }

    /**
     * Returns the associated stories
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function stories(){
    	return $this->hasMany('App\Story');
    }

    /**
     * Returns the associated volume
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function volume(){
    	return $this->belongsTo('App\Volume');
    }
}
