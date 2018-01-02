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
    return view('home');
});

Auth::routes();

Route::get('/contact', 'MessagesController@index')->name('contact');
Route::post('/contact/submit', 'MessagesController@submit');


Route::get('/', 'HomeController@index')->name('welcome');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/request', 'RequestController@index')->name('request');
Route::get('/experiment', 'ExperimentController@index')->name('experiment');
//Route::get('/asset', 'AssetController@index')->name('asset');

Route::prefix('asset')->group(function(){
  Route::get('/', 'AssetController@index')->name('asset');
  Route::post('/addnew', 'AssetController@addnew');
  Route::get('/', 'AssetController@getAssets');//list of asset
});
Route::get('/assetimage', 'AssetController@getImages')->name('assetimage');

Route::prefix('student')->group(function(){
  Route::get('/', 'StudentController@index')->name('student');
  Route::post('/addnew', 'StudentController@addnew');
});

Route::prefix('admin')->group(function(){
  Route::get('/', 'AdminController@index')->name('admin.dashboard');
  Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
  Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
});
