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
use Illuminate\Support\Facades\Auth;
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
    public function index($daily, $user)
    {
        $daily = Daily::find($daily);
        $student = User::find($user);
        $values = $student->value;
        return view ('teacher.value.index', ['student' => $student, 'daily' => $daily, 'values' => $values]);
    }

    /**
     *
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($daily, $user)
    {
        $daily = Daily::find($daily);
        $student = User::find($user);
        $values = $student->value;
        return view ('teacher.value.create', ['student' => $student, 'daily' => $daily, 'value' => $value]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $daily, $user)
    {
        $value = new Value($request->all());
        $value->save();

        Session::flash('message', 'Successfully created Value!');
        return Redirect()->route('teacher.daily.user.value.index', [$user, $daily]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($daily, $user, $id)
    {
        $daily = Daily::find($daily);
        $student = User::find($user);
        $value = Value::find($id);
        return view ('teacher.value.show', ['daily' => $daily, 'student' => $user, 'value' => $value]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($daily, $user, $id)
    {
        $daily = Daily::find($daily);
        $student = User::find($user);
        $value = Value::find($id);
        return view ('teacher.value.edit', ['daily' => $daily, 'student' => $student, 'value' => $value]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $daily, $user, $id)
    {

        $value = Value::find($id);
        $value->update($request->all());

        // redirect
        Session::flash('message', 'Successfully updated value!');
        return Redirect()->route('teacher.daily.user.value.index', [$daily, $user]);

    }

}
