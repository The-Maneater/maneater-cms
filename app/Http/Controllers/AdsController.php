<?php

namespace App\Http\Controllers;

use App\Ad;
use App\Http\Requests\CreateAdRequest;
use Illuminate\Http\Request;

class AdsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ads = Ad::orderBy('campaign_start')->paginate(15);
        return view('admin.ads.list', compact('ads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.ads.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\CreateAdRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateAdRequest $request)
    {
        $ad = new Ad;
        $ad->fill($request->except('adFile'));
        $image = $request->file('adFile')
            ->move(public_path('ads/'), $request->file('adFile')->getClientOriginalName());
        $ad->image_url = '/ads/' . $image->getFilename();
        $ad->times_served = 0;
        $ad->save();

        return redirect('/admin/advertising/ads');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Ad  $ad
     * @return \Illuminate\Http\Response
     */
    public function edit(Ad $ad)
    {
        return view('admin.ads.edit', compact('ad'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Ad  $ad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ad $ad)
    {
        $ad->fill($request->all());
        $ad->save();

        return redirect('/admin/advertising/ads');
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
