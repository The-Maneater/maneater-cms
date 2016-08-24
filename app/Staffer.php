<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staffer extends Model
{
	protected $fillable = [
		'first_name',
		'last_name',
		'is_active'
	];

    private $name;

    private $staffPositions = [];

    private $edBoardPositions = [];

    private $articles = [];

    private $photos = [];

    private $layouts = [];

    private $graphics = [];

    private $isActive;
}
