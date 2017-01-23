<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poll extends Model
{
    protected $fillable = [
      'question',
      'start_date',
      'end_date'
    ];

    protected $dates = [
      'start_date',
      'end_date'
    ];

    public function publication()
    {
        return $this->belongsTo(Publication::class);
    }

    public function questions()
    {
        return $this->hasMany(PollQuestion::class);
    }
}
