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

Auth::routes();
//********************************display*************************************
Route::get('/', 'HomeController@index')->name('home');
//********************************userpage************************************
Route::get('/userpage','UserController@index');
Route::get('/useredit',function(){
    return view('user.useredit');
});
Route::get('/edit_avatar',function(){
    return view('user.edit_avatar');
});
Route::get('/edit_passwd',function(){
    return view('user.edit_passwd');
});