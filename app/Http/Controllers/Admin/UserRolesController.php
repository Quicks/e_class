<?php

namespace App\Http\Controllers\Admin;

use Request;

use Requests;
use App\Http\Controllers\Controller;
use App\User;
use Redirect;
use Validator;
use Html;
use Form;
use Session;

class UserRolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
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
    public function usersList() {
       // dd($roles = User::find(1)->roles);

        $user = User::find(1);
    	$users = User::all();
        $roles = Role::all(1);
        dd($user->roles->title);
    	return view('admin.userRoles.usersList', ['users'=>$users]);
    }

    public function changeUserRole($id) {
        $user = User::find($id);
        return view ('admin.userRoles.changeUserRole', ['user'=> $user]);
    }

    public function updateUserRole(Request $request, $id) {
        $rules = array(
            'title' => 'required',
            'description',
        );
        $validator = Validator::make(Request::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('admin.userRoles.changeUserRole')
                ->withErrors($validator)
                ->withInput(Request::except('password'));
        } else {
            // store
            $user = User::find($id);
            $user->title = Request::get('title');
            $user->description = Request::get('description');
            $user->save();

            // redirect
            Session::flash('message', 'Successfully updated role!');
            return Redirect::to('admin.userRoles.usersList');
        }
    }
}
