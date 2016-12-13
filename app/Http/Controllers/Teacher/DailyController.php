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
use Auth;

class DailyController extends Controller
{
    public function index()
    {
       $teacher = Auth::user();
       $dailies = $teacher->classList->daily;
       return view ('teacher.daily.index', ['dailies' => $dailies]);
    }

    /**
     *
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teacher = Auth::user();
        $classList = $teacher->classList;
        return view ('teacher.daily.create', ['classList' => $classList]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $daily = new Daily($request->all());
        $daily->save();
        Session::flash('message', 'Successfully created Daily!');
        return Redirect()->route('teacher.daily.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($daily)
    {
        $teacher = Auth::user();
        $daily = $teacher->classList->daily()->find($daily);
        $users = $teacher->classList->user;
       return view ('teacher.daily.show', ['daily' => $daily, 'users' => $users]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($daily)
    {
        $teacher = Auth::user();
        $daily = $teacher->classList->daily->find($daily);
        return view ('teacher.daily.edit', ['daily' => $daily]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $daily)
    {

        $daily = Daily::find($daily);
        $daily->update($request->all());

        Session::flash('message', 'Successfully updated subject!');
        return Redirect()->route('teacher.daily.index', [$daily]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($daily)
    {
        $daily = Daily::find($daily);
        $daily->delete();

        Session::flash('message', 'Successfully deleted the subject!');
        return Redirect()->route('teacher.daily.index');
    }
}
