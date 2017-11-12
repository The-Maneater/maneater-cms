<?php

namespace App\Http\Controllers;

use App\Repositories\AdRepository;
use App\Story;
use Illuminate\Http\Request;
use Spatie\Tags\Tag;

class TagsController extends Controller
{
    public function show($slug)
    {
        $tag = Tag::where('slug->en', $slug)
            ->first();
        $stories = Story::withAllTags([$tag->name])
            ->orderBy('publish_date', 'DESC')
            ->paginate(20);
        $ads = AdRepository::cubes(2);

        return view('tags.show', compact('tag', 'stories', 'ads'));
    }
}
