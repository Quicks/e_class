<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


//Route::get('/', function () {
//    return view('teacher');
//});
//get('/',['as' => 'posts', 'users' => 'PostController@index']);
Route::get('/', 'PostController@index');
//Route::get('/', 'UsersController@index');
Route::get('/teacher', 'UsersController@teacher');
Route::get('/profile', 'UsersController@profile');
Route::get('/password', 'UsersController@password');
Route::get('/login', 'UsersController@login');
Route::get('/register', 'UsersController@register');
Route::auth();

Route::get('/home', 'HomeController@index');
Route::resource('item', 'ItemController');
Route::resource('roles', 'RoleController');
Route::resource('user', 'UsersController');
Route::resource('timetable', 'TimetableController');
Route::resource('teachers', 'TeacherController');
Route::resource('teachers.timetables', 'TimetableController');
Route::resource('schools', 'SchoolController');
Route::resource('sc','StudentsClassController');

Route::get('roles',['as'=>'roles.index','uses'=>'RoleController@index','middleware' => ['permission:role-list|role-create|role-edit|role-delete']]);
Route::get('roles/create',['as'=>'roles.create','uses'=>'RoleController@create','middleware' => ['permission:role-create']]);
Route::post('roles/create',['as'=>'roles.store','uses'=>'RoleController@store','middleware' => ['permission:role-create']]);
Route::get('roles/{id}',['as'=>'roles.show','uses'=>'RoleController@show']);
Route::get('roles/{id}/edit',['as'=>'roles.edit','uses'=>'RoleController@edit','middleware' => ['permission:role-edit']]);
Route::patch('roles/{id}',['as'=>'roles.update','uses'=>'RoleController@update','middleware' => ['permission:role-edit']]);
Route::delete('roles/{id}',['as'=>'roles.destroy','uses'=>'RoleController@destroy','middleware' => ['permission:role-delete']]);

Route::get('item',['as'=>'item.index','uses'=>'ItemController@index','middleware' => ['permission:item-list|item-create|item-edit|item-delete']]);
Route::get('item/create',['as'=>'item.create','uses'=>'ItemController@create','middleware' => ['permission:item-create']]);
Route::post('item/create',['as'=>'item.store','uses'=>'ItemController@store','middleware' => ['permission:item-create']]);
Route::get('item2/{id}',['as'=>'item.show','uses'=>'ItemController@show']);
Route::get('item/{id}/edit',['as'=>'item.edit','uses'=>'ItemController@edit','middleware' => ['permission:item-edit']]);
Route::patch('item/{id}',['as'=>'item.update','uses'=>'ItemController@update','middleware' => ['permission:item-edit']]);
Route::delete('item/{id}',['as'=>'item.destroy','uses'=>'ItemController@destroy','middleware' => ['permission:item-delete']]);




