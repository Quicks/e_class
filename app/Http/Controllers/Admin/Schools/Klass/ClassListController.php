<?php

namespace App\Http\Controllers\Admin\Schools\Klass;

use App\School;
use App\ClassList;
use App\Http\Controllers\Controller;
use App\Http\Requests;

use Illuminate\Http\Request;
use Redirect;
use Validator;
use Html;
use Form;
use Session;

class ClassListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($schoolList)
    {
       $school = School::find($schoolList);
        //

//        dd($school->classList);
 //       dd($school->classList());

       $classList = $school->classList;

        return view ('admin.school.classList.index', ['classList' => $classList, 'school' => $school]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.school.classList.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $class_name = new ClassList($request->all());
        $class_name->save();
        Session::flash('message', 'Successfully created Class!');
        return Redirect()->route('admin.classList.create', [$class_name->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $class_name = ClassList::find($id);
        return view ('admin.classList.show', ['class_name' => $class_name]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $class_name = ClassList::find($id);
        return view ('admin.classList.edit', ['class_name' => $class_name]);
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
        $class_name = ClassList::find($id);
        $class_name->update($request->all());

        Session::flash('message', 'Successfully updated Class!');
        return Redirect()->route('admin.classLists.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $class_name = ClassList::find($id);
        $class_name->delete();

        Session::flash('message', 'Successfully updated Class!');
        return Redirect()->route('admin.classLists.index');
    }
}
