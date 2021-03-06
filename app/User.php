<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laratrust\Traits\LaratrustUserTrait;
use Laravel\Scout\Searchable;

class User extends Authenticatable
{
    use Notifiable;
    use LaratrustUserTrait, Searchable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Returns the associated staffer
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function staffer()
    {
        return $this->hasOne(Staffer::class);
    }

    public function toSearchableArray()
    {
        $array = $this->toArray();
        unset($array['password']);

        return $array;
    }


}
