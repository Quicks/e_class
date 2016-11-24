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
        $roles = [];

        foreach(Role::all() as $role) {
            $tmp = [];
            $tmp[$role->id] = $role->title;
            array_push($roles, $tmp);
            //$roles = array_unique($roles);
          }
        return view ('admin.userRoles.changeUserRole', ['user'=> $user, 'roles' => $roles]);
    }

    public function updateUserRole(request $request, $id) {
       // todo add validate for role (чи є айдішка взагалі і чи обрана роль)
        $user = User::find($id);
        if (!$user->hasRole(request::get('role'))){
            $user->roles()->attach(request::get('role'));
        };

        // redirect
        Session::flash('message', 'Successfully updated role!');
        return Redirect::to(route('admin.roles.users_list'));
    }
}
