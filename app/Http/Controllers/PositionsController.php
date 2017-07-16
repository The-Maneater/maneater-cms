<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreatePositionRequest;
use App\Position;
use Illuminate\Http\Request;

class PositionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $positions = request()->has('search') ?
            Position::search(request('search'))->paginate(15) :
            Position::orderBy('priority', 'DESC')->paginate(15);
        return view('admin.positions.list', compact('positions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.positions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CreatePositionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePositionRequest $request)
    {
        $position = new Position;
        $position->title = $request->input('title');
        $position->is_editorial_board = $request->input('is_editorial_board') !== null;
        $position->is_exec = $request->input('is_exec') !== null;
        $position->priority = $request->input('priority');

        $position->save();

        return redirect('/admin/staff/positions');
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
     * @param Position $position
     * @return \Illuminate\Http\Response
     */
    public function edit(Position $position)
    {
        return view('admin.positions.edit', compact('position'));
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
        $position = new Position;
        $position->fill($request->only(['title', 'priority']));
        $position->title = $request->input('title');
        $position->is_editorial_board = $request->input('is_editorial_board') !== null;
        $position->is_exec = $request->input('is_exec') !== null;
        $position->save();

        return redirect('/admin/staff/positions');
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
