<?php



/*Route::get('/', function () {
    return view('welcome');
});*/
//get('/',['as' => 'posts', 'users' => 'PostController@index']);
Route::get('/', 'PostController@index');