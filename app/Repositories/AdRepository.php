<?php
/**
 * Created by PhpStorm.
 * User: Michael
 * Date: 8/23/17
 * Time: 12:22 PM
 */

namespace App\Repositories;


use App\Ad;

class AdRepository
{
    public static function cubes($times)
    {
        $cubes = Ad::cube()->active()->inRandomOrder()->take($times)->get();
        $cubes->each->serve();
        return ['cubes' => $cubes];
    }

    public static function banner($times)
    {
        $banner = Ad::banner()->active()->inRandomOrder()->take($times)->get();
        $banner->each->serve();
        return ['banner' => $banner];
    }

    public static function cubesAndBanner($cubes, $banner)
    {
        return array_merge(static::cubes($cubes), static::banner($banner));
    }
}