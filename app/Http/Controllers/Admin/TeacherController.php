<?php

namespace App\Http\Controllers\Admin;
//TODO need refactor
use App\Http\Controllers\Controller;
use App\Teacher;
use Request;
use Redirect;
use Validator;
use Html;
use Form;
use Session;
class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers = Teacher::paginate(5);
        return view ('teachers.index', ['teachers' => $teachers]);
    }

    /**
     *
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('teachers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $teacher = new Teacher();
            $teacher->class_name = Request::get('class_name');
            $teacher->name = Request::get('name');
            $teacher->email = Request::get('email');
            $teacher->save();

            Session::flash('message', 'Successfully created Teacher!');
            return Redirect::to('teachers');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $teacher = Teacher::find($id);
        return view ('teachers.show', ['teacher' => $teacher]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $teacher = Teacher::find($id);

        return view ('teachers.edit', ['teacher'=> $teacher]);
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

            $teacher = Teacher::find($id);
            $teacher->class_name = Request::get('class_name');
            $teacher->name = Request::get('name');
            $teacher->email = Request::get('email');
            $teacher->save();

            // redirect
            Session::flash('message', 'Successfully updated teacher!');
            return Redirect::to('teachers');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teacher = Teacher::find($id);
        $teacher->delete();

        // redirect
        Session::flash('message', 'Successfully deleted the teacher!');
        return Redirect::to('teachers');
    }
}