<?php

namespace App\Http\Controllers;

use App\Graphic;
use App\Http\Requests;
use App\Http\Requests\CreateGraphicRequest;
use Illuminate\Http\Request;

class GraphicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $graphics = Graphic::with(['section', 'issue'])->orderBy('publish_date')->paginate(25);
        return view('admin.graphics.list', compact('graphics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.graphics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CreateGraphicRequest|Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateGraphicRequest $request)
    {
        $graphic = new Graphic();
        $graphic->fill($request->except(['issue', 'section', 'byline', 'graphic']));
        $image = $request->file('graphic')->move(public_path('graphics/'), $request->file('graphic')->getClientOriginalName());
        $graphic->link = "/graphics/" . $image->getFilename();
        $graphic->issue()->associate($request->input('issue'));
        $graphic->section()->associate($request->input('section'));
        $graphic->staffer()->associate($request->input('byline'));
        $graphic->save();

        return redirect('/admin/core/graphics');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $graphic = Graphic::find($id);
        return $graphic;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $graphic = Graphic::find($id);
        return view('admin.graphics.edit', compact('graphic'));
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
        $graphic = Graphic::find($id);
        $graphic->fill($request->except(['issue', 'section', 'byline']));
        $graphic->issue()->associate($request->input('issue'));
        $graphic->section()->associate($request->input('section'));
        $graphic->staffer()->associate($request->input('byline'));
        $graphic->save();
        return redirect('/admin/core/graphics');
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
