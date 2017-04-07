<?php

namespace App\Http\Controllers;

use App\Section;
use App\Story;
use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard.dashboard');
    }

    public function frontpage()
    {
        $sections = Section::with(['latestStories'])->get()->take(6);
        $latest = Story::with(['section'])->latest()->take(10)->get();
        //dd($latest);
        //dd($sections);
        return view('stories.index', compact('sections', 'latest'));
    }
}
