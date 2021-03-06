<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\SpecialSection;
use Illuminate\Database\Eloquent\ModelNotFoundException;
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
        $speicalSection = SpecialSection::whereUrl("/special-sections/".$path . "/")->first();
        if($speicalSection == null){
            throw new ModelNotFoundException;
        }
        if(!file_exists(public_path("special-sections/" . $speicalSection->template_location))){
            return response('', 404);
        }
        $data = file_get_contents(public_path("special-sections/" . $speicalSection->template_location));
        $dom = new \DOMDocument();
        @$dom->loadHTML($data);
        //dd($dom);
        //<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
        foreach($dom->getElementsByTagName("head") as $head){
            $first = $head->childNodes[0];
            $elem = $dom->createElement("meta");
            $elem->setAttribute("http-equiv", "Content-Security-Policy");
            $elem->setAttribute("content", "upgrade-insecure-requests");
            $head->insertBefore($elem, $first);
        }
        $data = $dom->saveHTML();
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
