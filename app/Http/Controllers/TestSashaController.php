<?php

namespace App\Http\Controllers;

use App\School;
use Illuminate\Http\Request;

use App\Http\Requests;

class TestSashaController extends Controller
{
    //
    public function index(){
        $schools = School::all();
        return view('post.index')->withSchools($schools);
    }
}
