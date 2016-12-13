<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\School;
use App\ClassList;
use DB;
use Response;
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


    public function selectClassesBySchool(Request $request){

        $class_lists=School::find($request->get('school_Id'))->classList;
        return Response::json($class_lists);

    }
}

