<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SpecialSection extends Model
{
	private $url;

    private $slug;

    private $title;

    private $site;

    private $registrationRequired;

    private $templateLocation;
}
