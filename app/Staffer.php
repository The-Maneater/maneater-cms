<?php

namespace App;

use Carbon\Carbon;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Staffer extends Model
{
    use Sluggable;
    use Searchable;

	protected $fillable = [
		'first_name',
		'last_name',
		'is_active',
        'writer_pos',
        'photo_pos'
	];

	protected $casts = ['is_active' => 'boolean'];

    protected $appends = array('fullname');

    /**
     * Generates the array for the mysql scout driver
     * @return array
     */
    public function toSearchableArray()
    {
        $array = $this->toArray();
        unset($array['fullname']);
        unset($array['is_active']);

        return $array;
    }

    public function path()
    {
        return "/staff/" . $this->slug;
    }

    /**
     * Formats the full name of the staffer
     * @return string
     */
    public function getFullnameAttribute(){
        return $this->first_name . " " . $this->last_name;
    }

    /**
     * Returns the staffer's associated writer position
     * @return mixed
     */
    public function getWriterPositionAttribute()
    {
        return $this->writer_position;
//        return $this->positions->first(function($value, $key){
//           return collect(['Reporter', 'Staff Writer', 'Senior Staff Writer'])->contains($value->title);
//        })->title;
    }

    /**
     * Returns the staffer's associated photographer position
     * @return mixed
     */
    public function getPhotographerPositionAttribute()
    {
        return $this->photo_position;
//        return $this->positions->first(function($value, $key){
//            return collect(['Photographer', 'Staff Photographer', 'Senior Staff Photographer'])->contains($value->title);
//        })->title;
    }

    /**
     * Finds the staffer by slug
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

        return $position != null && $position->title == $positionTitle;
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

    /**
     * Generates the slug for the staffer's name
     * @return array
     */
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
        return $this->belongsToMany(Position::class)
            ->withPivot('period', 'current', 'id');
    }

    /**
     * Returns the associated non Ed Board positions
     * @return mixed
     */
    public function staffPositions(){
        return $this->positions()
            ->where('is_editorial_board', '=', false);
    }

    /**
     * Returns the associated Ed Board Positions
     * @return mixed
     */
    public function edBoardPositions(){
        return $this->positions()
            ->where('is_editorial_board', '=', true)
            ->orderBy('pivot_id', 'DESC');
    }

    /**
     * Returns the stories the staffer has written
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function stories(){
        return $this->belongsToMany(Story::class)
            ->orderBy('publish_date', 'DESC');
    }

    /**
     * Returns the photos the staffer has taken
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function photos(){
        return $this->hasMany(Photo::class);
    }

    /**
     * Returns the layouts the user has designed
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function layouts(){
        return $this->belongsToMany(Layout::class);
    }

    /**
     * Returns the graphics the user has designed
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function graphics(){
        return $this->hasMany(Graphic::class);
    }

    /**
     * Returns the associated user account
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
