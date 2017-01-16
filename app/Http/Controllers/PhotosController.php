<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreatePhotoRequest;
use App\Photo;
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
        $photos = Photo::with(['section', 'issue'])->orderBy('publish_date')->paginate(25);

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
        $photo = new Photo;
        $photo->fill($request->except(['byline', 'photo']));
        $image = $request->file('photo')->move(public_path('images/'), $request->file('photo')->getClientOriginalName());
        $photo->location = '/images/' . $image->getFilename();
        $photo->dateTaken = Carbon::now();
        $photo->save();
        $photo->photographers()->attach($request->input('byline'));

        $photographers = collect($request->input('byline'));

        $photographers->each(function($staffer, $key){
            /** @var \App\Staffer $staffer  */
           if($staffer->photos()->count() > 10 && $staffer->isA('Photographer')){
               $staffer->makeA('Staff Photographer', 'Photographer');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $photo = Photo::find($id);

        return view('admin.photos.edit', compact('photo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $photo = Photo::find($id);
        $photo->update($request->except(['byline', 'photo']));
        $photo->photographers()->sync($request->input('byline'));

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
