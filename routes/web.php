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
    return view('first');
});
Route::get('/home', function () {
    return view('homepage');
});
Route::get('/desc', function () {
    return view('desc');
});
Route::get('/pay', function () {
    return view('payment');
});
Route::get('/login', function () {
    return view('login');
});