<?php

namespace App\Http\Controllers\Teacher;

use App\Daily;
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

class DailyController extends Controller
{
    public function index($cabinet)
    {
        $cabinet = User::find($cabinet);
        $klass = ClassList::find($classList);
//        dd($school);
//        dd($klass);
        $dailies = $klass->daily;
        return view ('admin.school.daily.index', ['dailies' => $dailies, 'klass' => $klass, 'school' => $school]);
    }

    /**
     *
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($schoolList, $classList)
    {
        $school = School::find($schoolList);
        $klass = ClassList::find($classList);
        return view ('admin.school.daily.create', ['klass' => $klass, 'school' => $school, 'classList' => $classList]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $schoolList, $classList)
    {
        $daily = new Daily($request->all());
        $daily->save();
        Session::flash('message', 'Successfully created Daily!');
        return Redirect()->route('admin.schoolList.classList.daily.index', [$schoolList, $classList]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($schoolList, $classList, $id)
    {
        // dd($id);
        $school = School::find($schoolList);
        $klass = ClassList::find($classList);
        $daily = $klass->daily->find($id);
//        dd($daily = Daily::find($id));
        return view ('admin.school.daily.show', ['daily' => $daily, 'school' => $school, 'klass' => $klass]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($schoolList, $classList, $id)
    {
        $school = School::find($schoolList);
        $klass = ClassList::find($classList);
        $daily = $klass->daily->find($id);
        return view ('admin.school.daily.edit', ['daily' => $daily, 'school' => $school, 'klass' => $klass]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $schoolList, $classList, $id)
    {

        $daily = Daily::find($id);
        $daily->update($request->all());

        // redirect
        Session::flash('message', 'Successfully updated subject!');
        return Redirect()->route('admin.schoolList.classList.daily.index', [$schoolList, $classList]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($schoolList, $classList, $id)
    {
        $daily = Daily::find($id);
        $daily->delete();

        Session::flash('message', 'Successfully deleted the subject!');
        return Redirect()->route('admin.schoolList.classList.daily.index', [$schoolList, $classList]);
    }
}
