<?php

namespace App\Http\Controllers;

use App\Repositories\AdRepository;
use App\Story;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Spatie\Tags\Tag;

class TagsController extends Controller
{
    public function show($slug)
    {
        $tag = Tag::where('slug->en', $slug)
            ->first();
        $page = 0;
        if(request()->has('page')) $page = request('page') - 1;
        $itemStories = Story::withAllTags([$tag->name])->orderBy('id', 'DESC')->offset($page * 20)->take(20)->get()->load('headerPhotos');
        $count = Story::withCount(['tags' => function($query) use ($tag) {
            $query->where('tag_id', $tag->id);
        }])->first()->tags_count;
        $stories = new LengthAwarePaginator($itemStories, $count, 20, $page);

//        $stories = Story::withAllTags([$tag->name])
//            ->orderBy('id', 'DESC')
//            ->paginate(20);
        $ads = AdRepository::cubes(2);

        return view('tags.show', compact('tag', 'stories', 'ads'));
    }
}
