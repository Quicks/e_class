<?php

namespace App\Http\Controllers;


use App\MySchool;
use Request;
use Requests;

class PostController extends Controller{

    public function schmindex()
    {
        echo('hello');
//        $schools = MySchool::all();
       return view ('post.index')
//->withSchools($schools)
;
    }
}
