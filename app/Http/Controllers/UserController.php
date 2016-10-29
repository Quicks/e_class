<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function showProfile($id)
    {
        $user = User::find($id);

        return View::make('user.id', array('user' => $user));

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user');
    }

}
class UserController extends Controller
{
    public function profile()
    {

        return view('profile', array('user' => Auth::user()));

    }
    public function index(){

        return view('post.index');
    }

    public function teacher(){
        $data = [
            'name' => 'ПІБ вчителя'
        ];
        return view('teacher', $data);
    }

public function register(){
    return view('passwords.register');
}
    public function login(){
        return view('passwords.login');
    }
    public function password(){
        return view('emails.password');
    }
}