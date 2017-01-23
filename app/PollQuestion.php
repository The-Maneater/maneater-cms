<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PollQuestion extends Model
{
    protected $fillable = [
        'answer'
    ];

    public function poll()
    {
        return $this->belongsTo(Poll::class);
    }
}
