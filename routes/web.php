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
    return view('layouts.app');
   
});

Auth::routes();





Route::get('/contact', 'MessagesController@index')->name('contact');
Route::post('/contact/submit', 'MessagesController@submit');


Route::get('/', 'HomeController@index')->name('welcome');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/request', 'RequestController@index')->name('request');
Route::get('/experiment', 'ExperimentController@index')->name('experiment');
Route::get('/asset', 'AssetController@index')->name('asset');

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
  
   Route::get('/getprevdt',function(){
	
	if(session('date')==""){
	$date=date_create("now");
	}
	else{
		
		$date=session('date');
	}
	session(['date'=>$date]);
	
	date_sub($date,date_interval_create_from_date_string("1 month"));
	$msg= date_format($date,"M-Y");  //name of the month
    $datebeg=date_create(date_format($date,"Y-m-01"));
	$begin=date_format($datebeg,"D");
	
	$dateend=date("t",strtotime($msg));
	
      return response()->json(['msg'=> $msg,'begin'=>$begin,'dateend'=>$dateend], 200);
	
	
});


Route::get('/getnextdt',function(){
	
	if(session('date')==""){
	$date=date_create("now");
	}
	else{
		
		$date=session('date');
	}
	session(['date'=>$date]);
	date_add($date,date_interval_create_from_date_string("1 month"));
	$msg= date_format($date,"M-Y");  //name of the month
    $datebeg=date_create(date_format($date,"Y-m-01"));
	$begin=date_format($datebeg,"D");
	
	$dateend=date("t",strtotime($msg));
	  
    return response()->json(['msg'=> $msg,'begin'=>$begin,'dateend'=>$dateend], 200);
	
	
});

Route::get('/getpresdt',function(){
	$date=date_create("now");
	//date_sub($date,date_interval_create_from_date_string("1 month"));
	$msg= date_format($date,"M-d-Y");  //name of the month
    $datebeg=date_create(date_format($date,"Y-m-01"));
	$begin=date_format($datebeg,"D");
	
	$dateend=date("t",strtotime($msg));
	
      return response()->json(['msg'=> $msg,'begin'=>$begin,'dateend'=>$dateend], 200);
	
	
});


