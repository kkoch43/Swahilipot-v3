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

// Landing page
Route::get('/', function () {
  return view('welcome');
});

Route::get('/home', 'HomeController@index');

// Login and Register Routes
Auth::routes();

/** Admins Routes
* ===================================================================
*/
Route::group(['prefix'=>'admin'], function(){

  // Dashboard
  Route::get('/dashboard', 'AdminController@index')->name('dashboard');

  // Profile page
  Route::get('/profile', [
    'uses'=>'AdminController@getProfile',
    'as'=>'admin.profile'
  ]);

  // Settings page
  Route::get('/settings', [
    'uses'=>'AdminController@getSettings',
    'as'=>'admin.settings'
  ]);
});

/** Any authenticated User(Member)
* ===================================================================
*/
Route::group(['prefix'=>'user'], function(){

    // Members Profile page
    Route::get('/profile', [
    'uses'=>'MemberController@getProfile',
    'as'=>'members.profile'
    ]);

    // Members Settings page
    Route::get('/settings', [
    'uses'=>'MemberController@getSettings',
    'as'=>'members.settings'
    ]);
});
