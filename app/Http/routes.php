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

Route::get('/', 'PostController@index');
//Route::get('/', 'UsersController@index');
//Route::get('/teacher', 'UsersController@teacher');
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
Route::resource('teachers', 'Teacher\TeacherController');
Route::resource('teachers.timetables', 'TimetableController');
Route::resource('schools', 'SchoolController');
Route::resource('sc','StudentsClassController');
Route::group(['namespace'=>'Admin', 'prefix'=>'admin'], function() {
    Route::get('/', 'AdminController@index');
	Route::resource('roles', 'UserRolesController');
	Route::get('userList', 'UserRolesController@usersList')->name('admin.roles.users_list');
	Route::get('changeUserRole/{id}', 'UserRolesController@changeUserRole')->name('admin.roles.change_user_role');
    Route::put('updateUserRole/{id}', 'UserRolesController@updateUserRole')->name('admin.roles.update_user_role');
    Route::group(['namespace' => 'Subjects'], function() {
        Route::resource('subjects', 'SubjectsController');
        Route::get('index', ['uses' => 'SubjectsController@index', 'as' => 'admin.subject.index']);
        Route::get('create', ['uses' => 'SubjectsController@create', 'as' => 'admin.subject.create']);
        Route::post('/subject', ['uses' => 'SubjectsController@store', 'as' => 'admin.subject.store']);
        Route::get('show/{id}', ['uses' => 'SubjectsController@show', 'as' => 'admin.subject.show']);
        Route::put('update/{id}', ['uses' => 'SubjectsController@update', 'as' => 'admin.subject.update']);
        Route::delete('destroy/{id}', ['uses' => 'SubjectsController@destroy', 'as' => 'admin.subject.destroy']);
        Route::get('edit/{id}', ['uses' => 'SubjectsController@edit', 'as' => 'admin.subject.edit']);
    });
});
Route::group(['middleware'=>'teacher'], function() {
    Route::get('/teacher', 'UsersController@teacher');
    Route::resource('roles', 'Admin\UserRolesController');
});


//, 'middleware'=>'admin'
