<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::post('/follow/{username}', 'FollowController@store');

Route::post('/p', 'PostsController@store');
Route::get('/p/create', 'PostsController@create');
Route::get('/p/{post}', 'PostsController@show');

Route::get('/{username}', 'ProfileController@index');
Route::patch('/{username}', 'ProfileController@update');
Route::get('/{username}/edit', 'ProfileController@edit');
