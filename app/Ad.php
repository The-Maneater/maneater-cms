<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    private $size;

    private $campaignStart;

    private $campaignEnd;

    private $duration;

    private $purchaser;

    private $imageUrl;

    private $providerUrl;

    private $timesServed;
}
