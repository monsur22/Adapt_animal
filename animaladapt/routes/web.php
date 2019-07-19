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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin','AdminController@index');
Route::get('/user','UserController@index');
Route::get('/', 'HomeController@index');
Route::get('/cats', 'HomeController@cats_index');
Route::get('/dogs', 'HomeController@dogs_index');
Route::get('/volunteer', 'HomeController@volunteer_index');
Route::get('/about', 'HomeController@about_index');
Route::get('/contact', 'HomeController@contact_index');

