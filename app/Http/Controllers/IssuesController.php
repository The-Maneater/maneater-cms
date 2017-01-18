<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateIssueRequest;
use App\Issue;
use Illuminate\Http\Request;

class IssuesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $issues = Issue::orderBy('created_at')->paginate(15);
        return view('admin.issues.list', compact('issues'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.issues.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CreateIssueRequest|Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateIssueRequest $request)
    {
        $issue = new Issue;
        $issue->issue_number = $request->input('name');
        $issue->volume()->associate($request->input('volume'));
        $issue->save();

        return redirect('/admin/core/issues');
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
     * @param Issue $issue
     * @return \Illuminate\Http\Response
     */
    public function edit(Issue $issue)
    {
        return view('admin.issues.edit', compact('issue'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Issue $issue
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Issue $issue)
    {
        $issue->issue_number = $request->input('name');
        $issue->volume()->associate($request->input('volume'));
        $issue->save();

        return redirect('/admin/core/issues');
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
