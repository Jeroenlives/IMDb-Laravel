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

Route::get('/', function () {
    return view('home');
});

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

Route::group(['middleware' => 'moderator'], function () {
   Route::get('databases/', 'ModeratorController@index');
});