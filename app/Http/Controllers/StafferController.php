<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Position;
use App\Http\Requests\CreateStafferRequest;
use App\Staffer;
use Illuminate\Http\Request;

class StafferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staffers = request()->has('search') ?
            Staffer::search(request('search'))->orderBy('first_name')->paginate(15) :
            Staffer::orderBy('first_name')->paginate(15);
        $staffers->load('positions');
        return view('admin.staffers.list', compact('staffers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.staffers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CreateStafferRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateStafferRequest $request)
    {
        $staffer = new Staffer;
        $staffer->fill($request->except('user'));
        $staffer->is_active = true;
        if($request->input('user') !== null){
            $staffer->user()->associate($request->input('user'));
        }
        $staffer->save();
        $staffer->positions()->attach(Position::findByTitle('Reporter'), ['start_date' => \Carbon\Carbon::now()]);
        $staffer->positions()->attach(Position::findByTitle('Photographer'), ['start_date' => \Carbon\Carbon::now()]);


        return redirect('/admin/staff/staffers');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        return Staffer::findBySlug($slug);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Staffer $staffer
     * @return \Illuminate\Http\Response
     */
    public function edit(Staffer $staffer)
    {
        return view('admin.staffers.edit', compact('staffer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Staffer $staffer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Staffer $staffer)
    {
        //dd(request()->all());
        $staffer->fill($request->except(['active', 'user']));
        $staffer->is_active = $request->input('active') !== null;
        if($request->input('user') !== null && request('user') !== ''){
            $staffer->user()->associate($request->input('user'));
        }

        $positions = collect(request('positions'));
        $ids = $positions->pluck('position');
        $periods = $positions->pluck('period');
        $ids = $this->getPositions($ids, $periods);
        dd($ids);
        $staffer->positions()->sync($ids);

        $staffer->save();

        return redirect('/admin/staff/staffers');
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

    /**
     * Manipulates the list of inline photo ids and
     * transforms it to the format needed.
     * @param $ids
     * @param $periods
     * @return mixed
     */
    private function getPositions($ids, $periods)
    {
        $ids = $ids->reject(function ($item) {
                return $item === '' || $item === null;
            })
            ->flip()
            ->map(function ($item, $key) use ($periods) {
                return ['period' => $periods[$item]];
            });
        return $ids;
    }
}
