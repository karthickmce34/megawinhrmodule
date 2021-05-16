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
    return view('auth.login');
});

Auth::routes();

Route::post('login', 'Auth\LoginController@postLogin');
Route::get('login/logout', 'Auth\LoginController@logout');


//Route::get('/home', 'HomeController@index')->name('home');
Route::get('home', 'HomeController@getIndex')->name('home.index');

