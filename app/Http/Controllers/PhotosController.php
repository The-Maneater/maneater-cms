<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreatePhotoRequest;
use App\Photo;
use App\Staffer;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PhotosController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photos = request()->has('search') ?
            Photo::search(request('search'))->orderBy('publish_date', 'DESC')->paginate(15) :
            Photo::orderBy('publish_date', 'DESC')->paginate(25);
        $photos->load(['section', 'issue']);
        return view('admin.photos.list', compact('photos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.photos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CreatePhotoRequest|Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePhotoRequest $request)
    {
        $carbon = Carbon::now();
        $filePath = config('app.upload_path') . $carbon->year . "/" . $carbon->month . $carbon->day . "/photos";
        $photo = new Photo;
        $photo->fill($request->except(['byline', 'photo', 'tags']));
        //$image = $request->file('photo')->move(public_path('images/'), $request->file('photo')->getClientOriginalName());
        $image = $request->file('photo')
            ->storeAs($filePath, $request->file('photo')->getClientOriginalName(), 'media');
        $photo->location = $image;
        $photo->dateTaken = Carbon::now();
        $photo->staffer_id = request('byline');
        $photo->save();
//        $photo->photographer()->associate($request->input('byline'));
        $photo->attachTags($request->input('tags'));

        $photographers = collect($request->input('byline'));

        $photographers->each(function($staffer, $key){
            /** @var \App\Staffer $staffer  */
            $staffer = Staffer::find($staffer);
           if($staffer->photos()->count() > 10 && $staffer->photo_pos == "Photographer"){
               //$staffer->makeA('Staff Photographer', 'Photographer');
               $staffer->photo_pos = "Staff Photographer";
               $staffer->save();
           }
        });

        return redirect('/admin/core/photos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response|\App\Photo
     */
    public function show($id)
    {
        $photo = Photo::find($id);

        return $photo;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Photo $photo
     * @return \Illuminate\Http\Response
     */
    public function edit(Photo $photo)
    {
        return view('admin.photos.edit', compact('photo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Photo $photo)
    {
        $photo->update($request->except(['byline', 'photo', 'tags']));
        $photo->photographer()->sync($request->input('byline'));
        $photo->syncTags($request->input('tags'));

        return redirect('/admin/core/photos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
