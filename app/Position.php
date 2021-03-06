<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Position extends Model
{
    use Searchable;

    protected $fillable = ['title', 'is_editorial_board', 'is_exec', 'priority'];

    protected $casts = ['is_editorial_board' => 'boolean', 'is_exec' => 'boolean'];

    /**
     * Returns the associated staff
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function staff(){
    	return $this->belongsToMany('App\Staffer');
    }

    /**
     * Finds a position by title
     * @param $title
     * @return Model|null|static
     */
    public static function findByTitle($title)
    {
        return Position::where('title', '=', $title)->first();
    }
}
