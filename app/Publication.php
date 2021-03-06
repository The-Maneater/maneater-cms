<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    protected $fillable = ['name'];

    /**
     * Finds a publication by name
     * @param $name
     * @return mixed
     */
    public static function findByString($name)
    {
        return Publication::where('name', $name)->get()->first();
    }
}
