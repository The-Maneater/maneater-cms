<?php

namespace App\Http\Controllers;

use App\Graphic;
use App\Http\Requests;
use App\Http\Requests\CreateGraphicRequest;
use Carbon\Carbon;
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
        $graphics = request()->has('search') ?
            Graphic::search(request('search'))->paginate(25) :
            Graphic::orderBy('publish_date')->paginate(25);
        $graphics->load(['section', 'issue']);
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
        $carbon = Carbon::now();
        $filePath = $carbon->year . "/" . $carbon->month . $carbon->day . "/graphics";
        $graphic = new Graphic();
        $graphic->fill($request->except(['issue', 'section', 'byline', 'graphic']));
        $image = $request->file('graphic')
            ->storeAs($filePath, $request->file('graphic')->getClientOriginalName(), 'media');
        $graphic->link = $image;
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
     * @param  Graphic  $graphic
     * @return \Illuminate\Http\Response
     */
    public function edit(Graphic $graphic)
    {
        return view('admin.graphics.edit', compact('graphic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Graphic  $graphic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Graphic $graphic)
    {
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
