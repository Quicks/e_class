<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\School;
//use Request;
//use Requests;

class PostController extends Controller{


    public function index()
    {
        $schools = School::all();
        return view ('post.index', ['schools'=> $schools]);
    }
    public function  aboutUs(){
        return view('aboutUs');
    }


}

