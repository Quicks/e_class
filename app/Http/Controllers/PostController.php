<?php

namespace App\Http\Controllers;



use App\School;
use Request;
use Requests;

class PostController extends Controller
{

    public function index()
    {
        $schools = School::all();
        return view('post.index')->withSchools($schools);
    }
}

