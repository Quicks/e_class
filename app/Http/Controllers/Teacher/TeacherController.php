<?php

namespace App\Http\Controllers\Teacher;
use App\Daily;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Http\Requests;

class TeacherController extends Controller
{
    public function cabinet() {
        //TODO how set value in belongsTo Relation laravel
        $teacher = Auth::user();
        $dailies = $teacher -> classList -> daily;
        return view('teacher.teacher.cabinet', ['teacher' => $teacher, 'dailies' => $dailies]);
    }

}
