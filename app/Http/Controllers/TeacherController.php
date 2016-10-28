<?php

namespace App\Http\Controllers;

use App\Teacher;
use Request;
use Redirect;
use Validator;

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
//        $input = Request::all();
        $rules = array(
            'class_name'       => 'required',
            'name'      => 'required',
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

            // redirect
            Session::flash('message', 'Successfully created Teacher!');
            return Redirect::to('teachers');
        }
//        $teacher = Teacher($id);
//        $teacher->name = input::get('name');
//        $teacher->email  = input::get('email');
//        $this->validate($request, [
//            'teacher.name' => 'required',
//            'teacher.email' => 'required',
//        ]);
//        if ($validator->fails()) {
//            return redirect('post/create')
//                ->withErrors($validator)
//                ->withInput();
//        }
//        $name = $request->input('name');
//        $email = $request->input('email');
//        $input = Request::all();
//        return redirect('teachers');
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
//        dd($teacher->name);
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
        $teacher->update($request->all());
        dd($request);
//        $teacher = Teacher::find($id);
//        $teacher->name = $request->name;
//        $teacher->email = $request->email;
        //        $teacher->update($request->input());
        return redirect('teachers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}