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

/* Routes for Pages */
Route::get('/', 'PagesController@index');
Route::get('/homepage', 'PagesController@homepage');
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');

/* Routes for Product page */
Route::resource('products', 'ProductsController');
Route::get('product/{category}', 'ProductsController@procat');

/* Authentication Routes (Login/Registration) */
Auth::routes();
Route::get('/admin', 'AdminController@admin')->middleware('is_admin')->name('admin');

/* Routes for Dashboard */
Route::get('/home', 'HomeController@index')->name('home');

/* Routes for Orders page */
Route::get('/order', 'OrdersController@index')->middleware('is_admin')->name('order');
Route::get('/order', 'OrdersController@myOrder')->name('order');

/* Routes for Cart */
Route::post('/cart-add','CartsController@addToCart');
Route::get('/cart-show','CartsController@cartShow');
Route::post('/update-cart','CartsController@updateCart');
Route::get('/delete-cart-product/{rowId}','CartsController@removeFromCart');

/* Routes for Payment Gateway */
Route::get('/payment','PaymentsController@index');
Route::post('pay', 'PaymentsController@pay');
Route::get('pay-success', 'PaymentsController@success');

?>