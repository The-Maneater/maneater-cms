<?php

namespace App\Http\Controllers;

use App\Story;
use Illuminate\Http\Request;

class RedirectController extends Controller
{
    public function old($year, $month, $day,$slug)
    {
        $stories = Story::where('slug', $slug)->get();
        if(count($stories) == 1){
            return redirect($stories[0]->path()) ;
        }
        return $slug;
    }
}
