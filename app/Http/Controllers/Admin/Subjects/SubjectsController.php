<?php

namespace App\Http\Controllers\Admin\Subjects;

use App\Subject;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Request;
use Redirect;
use Validator;
use Html;
use Form;
use Session;
class SubjectsController extends Controller
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
        $subject = new Subject();
        $subject->title = request::get('title');
        $subject->save();

        Session::flash('message', 'Successfully created Subject!');
        return Redirect::to('admin.subject.index');
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
        $subject->title = Request::get('title');
        $subject->save();

        // redirect
        Session::flash('message', 'Successfully updated subject!');
        return Redirect::to('admin.subject');

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

        // redirect
        Session::flash('message', 'Successfully deleted the subject!');
        return Redirect::to('admin.subject.index');
       // return redirect()->route('/');
    }
}
