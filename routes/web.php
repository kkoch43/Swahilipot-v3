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

// Admins Routes
Route::group(['middleware' =>'admin', 'prefix'=>'admin'], function(){

  // Admins dashboard
  Route::get('/dashboard', 'AdminController@index')->name('dashboard');
});

// Any authenticated User
Route::group(['middleware' =>'auth', 'prefix'=>'members'], function(){

  // Users Profile page
  Route::get('/profile', [
    'uses'=>'MemberController@getProfile',
    'as'=>'members.profile'
  ]);

  // Users Settings page
  Route::get('/settings', [
    'uses'=>'MemberController@getSettings',
    'as'=>'members.settings'
  ]);
});
