<?php

namespace App\Http\Controllers;

use App\Classified;
use App\Http\Requests;
use App\Http\Requests\CreateClassifiedRequest;
use Illuminate\Http\Request;

class ClassifiedsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classifieds = Classified::orderBy('start_date')->paginate(15);
        return view('admin.classifieds.list', compact('classifieds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.classifieds.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CreateClassifiedRequest|Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateClassifiedRequest $request)
    {
        Classified::create($request->input());

        return redirect('/admin/advertising/classifieds');
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
     * @param  Classified  $classified
     * @return \Illuminate\Http\Response
     */
    public function edit(Classified $classified)
    {
        return view('admin.classifieds.edit', compact('classified'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Classified  $classified
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Classified $classified)
    {
        $classified->update($request->all());

        return redirect('/admin/advertising/classifieds');
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
