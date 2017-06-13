<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('logout/', function () {
    Auth::logout();
    return redirect('/')->with('message', "Succesfully logged out!");
});

Route::group(['middleware' => 'auth'], function () {
    Route::resource('user', 'UserController',
        array(
            'except' => array(
                'create',
                'update',
                'destroy',
                'index'
            )
        )
    );
});

Route::group(['middleware' => 'moderator', 'prefix' => 'database'], function () {
   Route::get('/', 'ModeratorController@index');
   Route::get('movies/', 'ModeratorController@movies');
   Route::get('series/', 'ModeratorController@series');
   Route::get('persons/', 'ModeratorController@persons');
   Route::get('users/', 'ModeratorController@users');
});