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
    return view('welcome');
});


Route::get('/login_page', function(){
    return view('login_page');
});

Route::get('/main_page', function(){
    return view('main_page');
});

Route::get('/edit_profil', function(){
    return view('profile.edit_profil');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
