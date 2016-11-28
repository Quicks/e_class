<?php

namespace App\Http\Controllers;

use Request;

use App\Http\Requests;
use App\School;

class PostController extends Controller{


    public function index()
    {
        $schools = School::all();
        dd($schools);
//        return view ('post.index', ['schools'=> $schools]);
    }


}
