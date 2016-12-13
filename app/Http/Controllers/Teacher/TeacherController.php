<?php

namespace App\Http\Controllers\Teacher;
use App\Daily;
use App\Http\Controllers\Controller;
use App\Teacher;
use Illuminate\Http\Request;
use Auth;
use App\Http\Requests;

class TeacherController extends Controller
{
    public function cabinet() {
//        //TODO how set value in belongsTo Relation laravel
        $teacher = Auth::user();
        $dailies = $teacher -> classList -> daily;
        $subjects = [];

        foreach($dailies as $daily) {
            $subject = [];
            $subject[$daily->id] = $daily->subject;
            array_push($subjects, $subject);
        }
        return view('teacher.teacher.cabinet', ['teacher' => $teacher, 'subjects' => $subjects]);
    }

}
