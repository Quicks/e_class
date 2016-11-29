<?php

namespace App\Http\Controllers\Admin\Schools\Daily;

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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($schoolList, $classList)
    {
        $school = School::find($schoolList);
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
         return view ('admin.school.daily.create', ['klass' => $klass, 'school' => $school]);
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
//        dd($request->class_id);
         Session::flash('message', 'Successfully created Daily!');
        return Redirect()->route('admin.schoolList.classList.daily.index', [$daily->id, $schoolList, $classList]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, $schoolList, $classList)
    {
        $school = School::find($schoolList);
        $klass = ClassList::find($classList);
        $daily = $klass->daily()->find($id);
        return view ('admin.school.classList.show', ['daily' => $daily, 'school' => $school, 'klass' => $klass]);
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
