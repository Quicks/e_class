<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\User;
use Auth;
use Image;
use App\Teacher;
use App\Students_class;
use App\Http\Requests;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        return view('post.index');
    }

    public function teacher(){
        return view('teacher', array('user'=>Auth::user()));
    }
        public function update_avatar(Request $request){
            if($request->hasFile('avatar')){
              $avatar = $request->file('avatar');
                $filename = time() . '.' . $avatar->getClientOriginalExtension();
                Image::make($avatar)->resize(300,300)->save( public_path('/uploads/avatars/' . $filename));

         $user = Auth::user();
         $user->avatar = $filename;
         $user->save();
}
    return view('teacher', array('user'=>Auth::user()));
}
    public function profile()
    {
        return view('profile');
    }
        public function password()
        {
            return view('emails.password');
        }

    public function login(){
        return view('passwords.login');
    }

    public function register(){
        return view('passwords.register');
    }


    public function timetable() {
        return view('timetable\show');
    }
//    public function index()
//    {
//        //
//    }

    /**
     *
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
//        dd($user);
//        $teacher = Teacher::find(1);
//        $students = Students_class::find(1);
//      dd($teacher->students_class()->detach($students->id));
 //       dd($students->teacher);

//        dd($teacher->students);
//        dd($teacher->save());

        return view('user.show', array('user' => $user));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
