<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flatpage extends Model
{
    protected $fillable = ['content', 'path', 'title', 'publication_id'];

    public function publication()
    {
        return $this->belongsTo(Publication::class);
    }
}
