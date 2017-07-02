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

//login
Route::post('/login','sessionController@login');
Route::get('/login','sessionController@login');
Route::get('/logout','sessionController@logout');
//registeration
Route::get('/register','registerController@register');
Route::post('/register','registerController@register');

//pages

//admin roles
Route::group(['middleware'=>'roles','roles'=>['Admin']],function(){
     Route::get('/control','pagesController@control');
     Route::get('/editor','pagesController@editor');
     Route::get('/home','pagesController@home');
     Route::post('/add-role','pagesController@addRole');
});

//editor roles
Route::group(['middleware'=>'roles','roles'=>['Editor','Admin']],function(){
     Route::get('/editor','pagesController@editor');
     Route::get('/home','pagesController@home');
});

//user roles
Route::group(['middleware'=>'roles','roles'=>['Editor','Admin','User']],function(){ 
     Route::get('/home','pagesController@home');
});
