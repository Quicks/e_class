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
Route::get('/classes_by_school', 'PostController@selectClassesBySchool');
Route::get('/', 'PostController@index');
Route::post('/profile', 'UsersController@update_avatar');
Route::get('/profile', 'UsersController@profile');
Route::get('/aboutUs', 'PostController@aboutUs');
Route::get('/password', 'UsersController@password');
Route::get('/login', 'UsersController@login');
Route::get('/register', 'UsersController@register');
Route::auth();

Route::get('/home', 'HomeController@index');
Route::resource('user', 'UsersController');
Route::resource('teachers', 'Admin\TeacherController');
Route::group(['namespace'=>'Admin', 'prefix'=>'admin'], function() {
    Route::get('/', 'AdminController@index');
	Route::resource('roles', 'UserRolesController');
	Route::get('userList', 'UserRolesController@usersList')->name('admin.roles.users_list');
	Route::get('changeUserRole/{id}', 'UserRolesController@changeUserRole')->name('admin.roles.change_user_role');
    Route::put('updateUserRole/{id}', 'UserRolesController@updateUserRole')->name('admin.roles.update_user_role');
    Route::group(['namespace' => 'Schools'], function() {
        Route::resource('subjects', 'Subjects\SubjectsController');
        Route::resource('schoolList', 'SchoolController');
        Route::resource('schoolList.classList', 'Klass\ClassListController');
        Route::resource('schoolList.classList.daily', 'Daily\DailyController');
    });

});
Route::group([], function() {
    Route::get('/teacher', 'UsersController@teacher');
    Route::resource('roles', 'Admin\UserRolesController');
});
//'middleware'=>'teacher'

Route::group( ['middleware' => 'admin'], function () {
//    Route::get('/admin','UsersController@admin');
       Route::resource('roles', 'Admin\UserRolesController');
});
//'middleware'=>'admin'
//
Route::group(['namespace' => 'Teacher', 'prefix' => 'teacher'], function() {
    Route::get('/cabinet', 'TeacherController@cabinet');
    Route::resource('daily', 'DailyController' );
    Route::resource('daily.value', 'ValueController' );
});

//, 'middleware'=>'teacher'