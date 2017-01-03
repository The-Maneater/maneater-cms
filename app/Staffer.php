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

    /**
     * @param $slug
     * @return Model|null|static
     */
    public static function findBySlug($slug){
        return Staffer::where('slug', '=', $slug)->first();
    }

    /**
     * @param $positionTitle
     * @return bool
     */
    public function isA($positionTitle)
    {
        $position = $this->staffPositions()->get()->first(function($value, $key) use($positionTitle) {
           return $value->title == $positionTitle;
        });

        return $position->title == $positionTitle;
    }

    public function makeA($newPosition, $oldPosition = null)
    {
        if($oldPosition != null){
            $this->staffPositions()->detach(Position::findByTitle($oldPosition));
        }
        $this->staffPositions()->attach(Position::findByTitle($newPosition));

        return $this;
    }

    public function sluggable(){
        return [
            'slug' => [
                'source' => 'fullname'
            ]
        ];
    }

    public function staffPositions(){
        return $this->belongsToMany('App\Position')
            ->withPivot('start_date', 'end_date');
    }

    public function edBoardPositions(){
        return $this->staffPositions()
            ->where('isEdBoard', '=', true)
            ->get();
    }

    public function stories(){
        return $this->hasMany('App\Story');
    }

    public function photos(){
        return $this->hasMany('App\Photo');
    }

    public function layouts(){
        return $this->hasMany('App\Layout');
    }

    public function graphics(){
        return $this->hasMany('App\Graphic');
    }
}
