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

	protected $casts = ['is_active' => 'boolean'];

    protected $appends = array('fullname');

    /**
     * Formats the full name of the staffer
     * @return string
     */
    public function getFullnameAttribute(){
        return $this->first_name . " " . $this->last_name;
    }

    public function getWriterPositionAttribute()
    {
        return $this->positions()->get()->first(function($value, $key){
           return collect(['Reporter', 'Staff Writer', 'Senior Staff Writer'])->contains($value->title);
        })->title;
    }

    public function getPhotographerPositionAttribute()
    {
        return $this->positions()->get()->first(function($value, $key){
            return collect(['Photographer', 'Staff Photographer', 'Senior Staff Photographer'])->contains($value->title);
        })->title;
    }

    /**
     * @param $slug
     * @return Model|null|static
     */
    public static function findBySlug($slug){
        return Staffer::where('slug', '=', $slug)->first();
    }

    /**
     * Checks to see if a staffer has the specified title
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

    /**
     * Adds a position to a staffer. Also swaps out positions if they are moving up
     * @param $newPosition
     * @param null $oldPosition
     * @return $this
     */
    public function makeA($newPosition, $oldPosition = null)
    {
        if($oldPosition != null){
            $this->positions()->detach(Position::findByTitle($oldPosition));
        }
        $this->positions()->attach(Position::findByTitle($newPosition));

        return $this;
    }

    public function sluggable(){
        return [
            'slug' => [
                'source' => 'fullname'
            ]
        ];
    }

    /**
     * Returns all positions
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function positions()
    {
        return $this->belongsToMany('App\Position')
            ->withPivot('start_date', 'end_date');
    }

    /**
     * Returns the associated non Ed Board positions
     * @return mixed
     */
    public function staffPositions(){
        return $this->positions()
            ->where('is_editorial_board', '=', false)
            ->get();
    }

    /**
     * Returns the associated Ed Board Positions
     * @return mixed
     */
    public function edBoardPositions(){
        return $this->positions()
            ->where('is_editorial_board', '=', true)
            ->get();
    }

    /**
     * Returns the stories the staffer has written
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function stories(){
        return $this->hasMany('App\Story');
    }

    /**
     * Returns the photos the staffer has taken
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function photos(){
        return $this->hasMany('App\Photo');
    }

    /**
     * Returns the layouts the user has designed
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function layouts(){
        return $this->hasMany('App\Layout');
    }

    /**
     * Returns the graphics the user has designed
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function graphics(){
        return $this->hasMany('App\Graphic');
    }
}
