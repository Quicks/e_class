<?php

namespace App\Http\Controllers\Admin\Klass;


use App\ClassList;
use App\Http\Controllers\Controller;
use App\Http\Requests;

use Illuminate\Http\Request;
use Redirect;
use Validator;
use Html;
use Form;
use Session;

class classListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classList = ClassList::paginate(5);
        return view ('admin.classList.index', ['classList' => $classList]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.classList.create');
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
        Session::flash('message', 'Successfully created Class!');
        return Redirect()->route('admin.classList.create');
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
        return Redirect()->route('admin.classList.index');
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
        return Redirect()->route('admin.classList.index');
    }
}