<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Staffer extends Model
{
    use Sluggable;

	protected $fillable = [
		'first_name',
		'last_name',
		'is_active'
	];

    protected $appends = array('fullname');

    public function getFullnameAttribute(){
        return $this->first_name . " " . $this->last_name;
    }

    public static function findBySlug($slug){
        return Staffer::where('slug', '=', $slug)->first();
    }

    public function sluggable(){
        return [
            'slug' => [
                'source' => 'fullname'
            ]
        ];
    }

    public function staffPositions(){
        return $this->belongsToMany("App\Position")->withPivot('start_date', 'end_date');
    }

    public function edBoardPositions(){
        return $this->staffPositions()->where('isEdBoard', '=', true);
    }

    public function stories(){
        return $this->hasMany("App\Story");
    }

    public function photos(){
        return $this->hasMany("App\Photo");
    }

    public function layouts(){
        return $this->hasMany('App\Layout');
    }

    public function graphics(){
        return $this->hasMany('App\Graphic');
    }
}
