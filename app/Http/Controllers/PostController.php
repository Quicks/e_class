<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\School;

class PostController extends Controller{


    public function index()
    {
        $schools = School::all();
        return view ('post.index', ['schools'=> $schools]);
    }


}
