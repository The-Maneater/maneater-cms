<?php

namespace App\Http\Controllers;

use App\Poll;
use App\PollQuestion;
use Illuminate\Http\Request;

use App\Http\Requests;

class PollsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $polls = request()->has('search') ?
            Poll::search(request('search'))->paginate(15) :
            Poll::orderBy('start_date')->paginate(15);
        return view('admin.polls.list', compact('polls'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.polls.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $poll = new Poll($request->except(['answers', 'publication']));
        $poll->publication()->associate($request->input('publication'));

        $poll->save();
        $poll->questions()->createMany($request->input('answers'));

        return redirect('/admin/core/polls');
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
     * @param  Poll  $poll
     * @return \Illuminate\Http\Response
     */
    public function edit(Poll $poll)
    {
        return view('admin.polls.edit', compact('poll'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Poll  $poll
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Poll $poll)
    {
        $poll->update($request->except(['publication', 'answers']));
        $poll->publication()->associate($request->input('publication'));
        collect($request->input('answers'))->each(function($item, $key) use($poll){
            if(isset($item['id'])){
               $answer = PollQuestion::find((int)$item['id']);
               $answer->update(['answer' => $item['answer']]);
            }else{
                $poll->questions()->create(['answer' => $item['answer']]);
            }
        });

        return redirect('/admin/core/polls');
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
