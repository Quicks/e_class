<?php

namespace App\Http\Controllers\Admin;

use Request;

use Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Role;
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
    	$users = User::all();
    	return view('admin.userRoles.usersList', ['users'=>$users]);
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function changeUserRole($id) {
        $user = User::find($id);
//        $roles = $user->roles;
//        dd($roles);
        return view ('admin.userRoles.changeUserRole', ['user'=> $user]);
    }

    public function updateUserRole(request $request, $id) {
        $rules = array(
            'title' => 'required',
            'description',
        );
        $validator = Validator::make(request::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('admin.userRoles.changeUserRole')
                ->withErrors($validator)
                ->withInput(request::except('password'));
        } else {
            // store
            $user = User::find($id);
            foreach ($user->roles as $roles) {
                $roles->title = request::get('title');
                $roles->description = request::get('description');
                $roles->save();
            }
        }
            // redirect
            Session::flash('message', 'Successfully updated role!');
            return Redirect::to('admin.userRoles.usersList');
        }
}
