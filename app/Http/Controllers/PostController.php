<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PostController extends Controller{

    public function index(){

        return view('post.index');
    }

    public function teacher(){
        return view('teacher');
    }

    public function profile(){
        return view('profile');
    }

    public function timetable() {
        return view('timetable\show');
    }
}
