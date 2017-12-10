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
Route::get('/welcome', 'HomeController@welcome')->name('welcome');
//********************************user_page************************************
Route::get('/user/edit','UserController@showEdit')->name('user.edit_page');//为什么要放在它的上面才可以查询
Route::patch('/user/save/{id}','UserController@saveEdit')->name('user.save_edit');
Route::get('/user/{id}/edit_avatar','UserController@showAvatarEdit')->name('user.avatar_edit');
Route::get('/user/{id}/edit_password','UserController@showPasswordEdit')->name('user.password_edit');
Route::get('/user/{id}','UserController@show')->name('user.page');

//******************************articles**************************************
Route::get('/articles/{id}','PostController@detail')->name('articles.detail');
Route::get('/articles/{id}/edit','PostController@edit')->name('articles.edit');
Route::get('/article/{id}','PostController@editArticle')->name('user.article');
Route::post('/article_put/{id}','PostController@store')->name('user.article_put');

//
Route::post('user/follow','FollowersController@follow');
