<?php

namespace App\Http\Controllers;

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
        $teachers = Teacher::all();
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
        $rules = array(
            'class_name' => 'required',
            'name'  => 'required',
            'email' => 'required|email'
        );
        $validator = Validator::make(Request::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('teachers/create')
                ->withErrors($validator)
                ->withInput(Request::except('password'));
        } else {
            // store
            $teacher = new Teacher();
            $teacher->class_name = Request::get('class_name');
            $teacher->name = Request::get('name');
            $teacher->email = Request::get('email');
            $teacher->save();
            Session::flash('message', 'Successfully created Teacher!');
            return Redirect::to('teachers');
        }
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

        $rules = array(
            'class_name' => 'required',
            'name'       => 'required',
            'email'      => 'required|email',
        );
        $validator = Validator::make(Request::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('teachers')
                ->withErrors($validator)
                ->withInput(Request::except('password'));
        } else {
            // store
            $nerd = Teacher::find($id);
            $nerd->class_name = Request::get('class_name');
            $nerd->name = Request::get('name');
            $nerd->email = Request::get('email');
            $nerd->save();

            // redirect
            Session::flash('message', 'Successfully updated teacher!');
            return Redirect::to('teachers');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $nerd = Teacher::find($id);
        $nerd->delete();

        // redirect
        Session::flash('message', 'Successfully deleted the teacher!');
        return Redirect::to('teachers');
    }
}