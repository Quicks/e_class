<?php

namespace App\Http\Controllers\Admin\Schools\Daily;
use App\Subject;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests;

class DailyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subjects = Subject::paginate(5);
        return view ('admin.subject.index', ['subjects' => $subjects]);
    }

    /**
     *
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.subject.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $subject = new Subject($request->all());
//        $subject = fill($request->all());
//        $input = $request::all();
//        $subject->title = Request::get('title');
        $subject->save();

        Session::flash('message', 'Successfully created Subject!');
        return Redirect()->route('admin.subjects.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $subject = Subject::find($id);
        return view ('admin.subject.show', ['subject' => $subject]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subject = Subject::find($id);
        return view ('admin.subject.edit', ['subject'=> $subject]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $subject = Subject::find($id);
        $subject->update($request->all());

        // redirect
        Session::flash('message', 'Successfully updated subject!');
        return Redirect()->route('admin.subjects.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subject = Subject::find($id);
        $subject->delete();

        Session::flash('message', 'Successfully deleted the subject!');
        return Redirect()->route('admin.subjects.index');
    }
}
