<?php

namespace App\Http\Controllers;

use App\Section;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class MoveController extends Controller
{
    public function index()
    {
        return view('move.index');
    }

    public function section($slug)
    {
        $section = Section::where('publication_id', 2)->where('slug', $slug)->first();
        $stories = $section->stories()->paginate(20);
        return view('move.section', compact('section', 'stories'));
    }
}
