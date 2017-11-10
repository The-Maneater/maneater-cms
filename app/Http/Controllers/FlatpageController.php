<?php

namespace App\Http\Controllers;

use App\Flatpage;
use Illuminate\Http\Request;

class FlatpageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $flatpages = Flatpage::paginate(15);
        return view('admin.flatpages.list', compact('flatpages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.flatpages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $flatpage = new Flatpage($request->except('publication'));
        $flatpage->publication()->associate($request->get('publication'));
        $flatpage->save();

        return redirect('/admin/site/flatpages');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Flatpage  $flatpage
     * @return \Illuminate\Http\Response
     */
    public function show($param)
    {
        //dd($param);
        $flatpage = Flatpage::where('path', $param)->firstOrFail();
        return view('flatpages.show', compact('flatpage'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Flatpage  $flatpage
     * @return \Illuminate\Http\Response
     */
    public function edit(Flatpage $flatpage)
    {
        return view('admin.flatpages.edit', compact('flatpage'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Flatpage  $flatpage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Flatpage $flatpage)
    {
        $flatpage->update($request->except('publication'));
        $flatpage->publication()->associate($request->get('publication'));
        $flatpage->save();

        return redirect('/admin/site/flatpages');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Flatpage  $flatpage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Flatpage $flatpage)
    {
        //
    }
}
