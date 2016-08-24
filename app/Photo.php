<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    private $title;

    private $description;

    private $photographer;

    private $dateTaken;

    private $tags = [];

    private $storyIds = [];

    private $location;

    private $subject = [];
}
