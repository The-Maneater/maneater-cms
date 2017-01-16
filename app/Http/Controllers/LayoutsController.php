<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateLayoutRequest;
use App\Layout;
use Illuminate\Http\Request;

class LayoutsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $layouts = Layout::with(['staffer', 'issue', 'section'])
            ->orderBy('date_published')
            ->paginate(25);
        return view('admin.layouts.list', compact('layouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.layouts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CreateLayoutRequest|Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateLayoutRequest $request)
    {
        $layout = new Layout;
        $layout->fill($request->except(['section', 'issue', 'staffer', 'layout']));
        $file = $request->file('layout')->move(public_path('layouts/'), $request->file('layout')->getClientOriginalName());
        $layout->link = '/layouts/' . $file->getFilename();
        $layout->section()->associate($request->input('section'));
        $layout->issue()->associate($request->input('issue'));
        $layout->staffer()->associate($request->input('staffer'));
        $layout->save();

        return redirect('/admin/core/layouts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
//        $layout = Layout::find($id);
//        return $layout;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $layout = Layout::find($id);
        return view('admin.layouts.edit', compact('layout'));
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
        $layout = Layout::find($id);
        $layout->update($request->except(['section', 'issue', 'staffer']));
        $layout->staffer()->associate($request->input('staffer'));
        $layout->section()->associate($request->input('section'));
        $layout->issue()->associate($request->input('issue'));

        return redirect('/admin/core/layouts');
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
