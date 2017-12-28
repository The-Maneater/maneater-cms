<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\SpecialSection;
use Illuminate\Http\Request;

class SpecialSectionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateSpeicalSectionRequest $request)
    {
        SpecialSection::create($request->input());

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param $path
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function show($path)
    {
        $data = file_get_contents(public_path("special-sections/".$path . ".html"));
        return view('stories.special', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
