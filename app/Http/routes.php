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
Route::post('/profile', 'UsersController@update_avatar');
Route::get('/profile', 'UsersController@profile');
Route::get('/password', 'UsersController@password');
Route::get('/login', 'UsersController@login');
Route::get('/register', 'UsersController@register');
Route::auth();

Route::get('/home', 'HomeController@index');
Route::resource('item', 'ItemController');
Route::resource('user', 'UsersController');
Route::resource('timetable', 'TimetableController');
Route::resource('teachers', 'TeacherController');
Route::resource('teachers.timetables', 'TimetableController');
Route::resource('schools', 'SchoolController');
Route::resource('sc','StudentsClassController');
Route::group(['namespace'=>'Admin', 'prefix'=>'admin'], function() {
	Route::resource('roles', 'UserRolesController');	
	Route::get('userList', 'UserRolesController@usersList');
	Route::get('changeUserRole', 'UserRolesController@changeUserRole', ['as'=>'changeUserRole']);
});





