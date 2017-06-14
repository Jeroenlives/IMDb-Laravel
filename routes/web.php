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
Route::get('movies', 'MovieController@index');

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

    // User CRUD
    Route::get('users/create', 'UserController@create');
    Route::post('users/create', 'UserController@store');
    Route::get('users/{user}/edit', 'UserController@edit');
    Route::put('user/{user}', 'UserController@update');
    Route::delete('users/{user}', 'UserController@destroy');

    // Movie CRUD
    Route::get('movies/create', 'MovieController@create');
    Route::post('movies/create', 'MovieController@store');
    Route::get('movies/{movie}/edit', 'MovieController@edit');
    Route::put('movies/{movie}', 'MovieController@update');
    Route::delete('movies/{movie}', 'UserController@destroy');

    // Person CRUD
    Route::get('persons/create', 'PersonController@create');
    Route::post('persons/create', 'PersonController@store');
});