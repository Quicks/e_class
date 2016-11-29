<?php

namespace App\Http\Controllers;


<<<<<<< HEAD
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
=======
use App\Http\Requests;

class PostController extends Controller{

    public function index(){
        return view('post.index');
>>>>>>> parent of 0f94023... commit after creating on the user side by developers Musienko and Kushnir
    }
}
