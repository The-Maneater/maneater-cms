<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateVolumeRequest;
use App\Volume;
use Illuminate\Http\Request;

use App\Http\Requests;

class VolumesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $volumes = request()->has('search') ?
            Volume::search(request('search'))->orderBy('first_issue_date')->paginate(15) :
            Volume::orderBy('first_issue_date')->paginate(15);
        return view('admin.volumes.list', compact('volumes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.volumes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CreateVolumeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateVolumeRequest $request)
    {
        Volume::create($request->input());

        return redirect('/admin/core/volumes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Volume  $volume
     * @return \Illuminate\Http\Response
     */
    public function show(Volume $volume)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Volume  $volume
     * @return \Illuminate\Http\Response
     */
    public function edit(Volume $volume)
    {
        return view('admin.volumes.edit', compact('volume'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Volume  $volume
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Volume $volume)
    {
        $volume->update($request->all());
        return redirect('/admin/core/volumes');
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
