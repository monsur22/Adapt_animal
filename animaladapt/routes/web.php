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
///home
Route::get('/', 'HomeController@index');
Route::get('/animal-by-menu/{id}', 'HomeController@animal_by_menu');
Route::get('/animal-details-by-id/{id}', 'HomeController@animal_details_by_id');
Route::post('/request-for-adapt', 'HomeController@request_for_adapt');

Route::get('/volunteer', 'HomeController@volunteer_index');
Route::get('/about', 'HomeController@about_index');
Route::get('/contact', 'HomeController@contact_index');



//admin
Route::get('/category','AdminController@category');
Route::post('/category','AdminController@category_add');
Route::get('/category-info/{id}', 'AdminController@category_edit');
Route::post('/category-update', 'AdminController@category_update');
Route::get('/category/delete/{id}', 'AdminController@category_delete');
Route::get('/category-status/{id}',[
    'uses'=>'AdminController@category_status_update',
    'as'=>'category_status_update'
    ]);


// All post
Route::get('/post-list','AdminController@post_list');
Route::get('/Request-On-Post','AdminController@Request_On_Post');
Route::get('/Request/delete/{id}', 'AdminController@Request_delete');
// Volunter
Route::get('/volunteer-show', 'AdminController@volunteer_show');
Route::get('/user-list', 'AdminController@user_list');


// user

Route::get('/mypost', 'UserController@mypost');
Route::post('/mypost', 'UserController@mypost_add');
Route::get('/mypost-info/{id}', 'UserController@mypost_edit');
Route::post('/mypost-update', 'UserController@mypost_update');
Route::get('/mypost/delete/{id}', 'UserController@mypost_delete');
Route::get('/mypost-status/{id}',[
    'uses'=>'UserController@mypost_status_update',
    'as'=>'mypost_status_update'
    ]);


// My Request
Route::get('/my-request', 'UserController@my_request');
Route::get('/request-my-post', 'UserController@request_my_post');
Route::get('/request-my-post/{id}',[
    'uses'=>'UserController@request_my_post_status_update',
    'as'=>'request_my_post_status_update'
    ]);
Route::get('/Adapt-list', 'UserController@Adapt_list');

// Volunteer
Route::post('/volunteer-add', 'VolunteerController@volunteer_add');
// Route::get('/mypost-view/{id}', 'VolunteerController@mypost_edit');
// Route::get('/mypost/delete/{id}', 'VolunteerController@mypost_delete');

Route::get('/contact/show','ContactController@contact_show');
Route::post('/contact/front','ContactController@frontcontact');
Route::get('/contact/delete/{id}','ContactController@contact_delete');
Route::get('/contact/replay/{id}','ContactController@contact_replay');
Route::post('/contact/replay-message','ContactController@replay_message');