<?php

namespace App\Http\Controllers\Teacher;

use App\Daily;
use App\Value;
use App\School;
use App\Subject;
use App\User;
use App\ClassList;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Redirect;
use Validator;
use Html;
use Form;
use Session;
use App\Http\Requests;

class ValueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($schoolList, $classList, $daily)
    {
        $school = School::find($schoolList);
        $klass = ClassList::find($classList);
        $daily = Daily::find($daily);
        $users = $daily->classList->user;
        //dd($value = $daily->classList->user->value());
        return view ('admin.school.value.index', ['school' => $school, 'klass' => $klass, 'daily' => $daily, 'users' => $users]);
    }

    /**
     *
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($schoolList, $classList, $daily_id)
    {

        $school = School::find($schoolList);
        $klass = ClassList::find($classList);
        $daily = Daily::find($daily_id);
//        dd($daily->id);
        return view ('admin.school.value.create', ['klass' => $klass, 'school' => $school, 'daily' => $daily, 'daily_id' => $daily->id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $schoolList, $classList, $daily_id)
    {
        $value = new Value($request->all());
        $value->save();
//        dd($daily_id);
        Session::flash('message', 'Successfully created Value!');
        return Redirect()->route('admin.schoolList.classList.daily.value.index', [$schoolList, $classList, $daily_id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($schoolList, $classList, $daily_id, $id)
    {
        // dd($id);
        $school = School::find($schoolList);
        $klass = ClassList::find($classList);
        $daily = Daily::find($daily_id);
        $value = $daily->value->find($id);
//        dd($daily = Daily::find($id));
        return view ('admin.school.value.show', ['daily' => $daily, 'school' => $school, 'klass' => $klass, 'value' => $value]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($schoolList, $classList, $daily_id, $id)
    {
        $school = School::find($schoolList);
        $klass = ClassList::find($classList);
        $daily = Daily::find($daily_id);
        $value = $daily->value->find($id);
        return view ('admin.school.value.edit', ['value' => $value, 'daily' => $daily, 'school' => $school, 'klass' => $klass]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $schoolList, $classList, $daily_id, $id)
    {

        $value = Value::find($id);
        $value->update($request->all());

        // redirect
        Session::flash('message', 'Successfully updated value!');
        return Redirect()->route('admin.schoolList.classList.daily.value.index', [$schoolList, $classList, $daily_id]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($schoolList, $classList,$daily_id, $id)
    {
        $value = Value::find($id);
        $value->delete();

        Session::flash('message', 'Successfully deleted the subject!');
        return Redirect()->route('admin.schoolList.classList.daily.value.index', [$schoolList, $classList, $daily_id]);

    }
}
