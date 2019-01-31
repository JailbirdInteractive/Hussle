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

Route::get('/', 'PagesController@home');
// Route::get('/addjob', 'PagesController@addJob');
// Route::post('/postjob', 'JobsController@store');
// Route::get('/jobpage', 'JobsController@index');
// Route::get('/settings','PagesController@settings');
//Route::post('update_profile','UsersController@store');
//Route::resource('profiles','ProfilesController');
Route::resource('users','UsersController');
Route::resource('jobs','JobsController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

