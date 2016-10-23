<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staffer extends Model
{
	protected $fillable = [
		'first_name',
		'last_name',
		'is_active'
	];

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
