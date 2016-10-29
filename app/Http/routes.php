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
Route::get('/', 'UserController@index');

Route::get('/teacher', 'UserController@teacher');
Route::get('/profile', 'UserController@profile');
Route::get('/register', 'UserController@register');
Route::get('/login', 'UserController@login');
Route::get('/password', 'UserController@password');
Route::auth();

Route::get('/home', 'HomeController@index');
Route::resource('user', 'UsersController');
Route::resource('timetable', 'TimetableController');
Route::resource('teachers', 'TeacherController');
Route::resource('schools', 'SchoolController');
Route::resource('studentsClass', 'ClassController');



