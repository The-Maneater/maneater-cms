<?php

namespace App\Http\Controllers;

use App\Ad;
use App\Http\Requests\CreateAdRequest;
use Carbon\Carbon;
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
        $this->authorize('index', Ad::class);
        $ads = request()->has('search') ?
            Ad::search(request('search'))->paginate(15) :
            Ad::orderBy('campaign_start')->paginate(15);
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
        // $carbon = Carbon::now();
        // $filePath = $carbon->year . "/" . $carbon->month . $carbon->day . "/ads";
        // $ad = new Ad;
        // $ad->fill($request->except('adFile'));
        // $image = $request->file('adFile')
        //     ->storeAs($filePath, $request->file('adFile')->getClientOriginalName(), 'media');
        // $ad->image_url = $image;
        // $ad->times_served = 0;
        // $ad->save();
        $ad = new Ad;
        if($request->has('raw_content')){
            $ad->fill($request->except('provider_url', 'adFile'));
            $ad->provider_url = "";
            $ad->times_served = 0;
            $ad->image_url = "";

            $ad->save();
        }else{
            $carbon = Carbon::now();

            $filePath = config('app.upload_path') . $carbon->year . "/" . $carbon->month . $carbon->day . "/ads";


            $ad->fill($request->except('adFile', 'raw_content')); //maybe column name instead

            //uploads photo
            // $image = $request->file('adFile')->move($filePath, $request->file('adFile')->getClientOriginalName());


            //current
            // $image = $request->file('adFile')
            //     ->storeAs($filePath, $request->file('adFile')->getClientOriginalName(), 'media');

            $image = $request->file('adFile')->move(public_path($filePath), $request->file('adFile')->getClientOriginalName());

            //grabs filepath
            $ad->image_url = $carbon->year . "/" . $carbon->month . $carbon->day . "/ads/" . $request->file('adFile')->getClientOriginalName();
            $ad->times_served = 0;

            $ad->save();
        }

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
        $this->authorize('update', $ad);
        $ad->fill($request->all());
        $ad->save();

        return redirect('/admin/advertising/ads');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Ad $ad
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ad $ad)
    {
        $this->authorize('delete', $ad);
        $ad->delete();
        return redirect('/admin/advertising/ads');
    }
}
