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
Route::get('/the_project', function () {
    return view('project');
});
Route::get('/successfully_booked', function () {
    return view('successful_reservation');
});
Route::get('/dashboard', function () {
    return view('vue');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
