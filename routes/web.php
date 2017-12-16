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
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('home');
//********************************user_page************************************
Route::get('/user/edit','EditController@showEdit')->name('user.edit_page');//为什么要放在它的上面才可以查询
Route::patch('/user/save/{id}','EditController@saveEdit')->name('user.save_edit');
Route::get('/user/{id}/edit_avatar','EditController@showAvatarEdit')->name('user.avatar_edit');
Route::get('/user/{id}/save_avatar','EditController@saveAvatar')->name('user.avatar_save');
Route::get('/user/{id}/edit_password','EditController@showPasswordEdit')->name('user.password_edit');
Route::get('/user/{id}/save_password','EditController@savePassword')->name('user.password_save');
Route::get('/user/{id}','UserController@show')->name('user.page');

//******************************articles**************************************
Route::get('/articles/{id}','PostController@detail')->name('articles.detail');
Route::get('/articles/{id}/edit','PostController@edit')->name('articles.edit');
Route::get('/article/{id}','PostController@editArticle')->name('user.article');
Route::post('/article_put/{id}','PostController@store')->name('user.article_put');
Route::get('/article_delete/{post}','PostController@destroy')->name('user.article_del');
Route::post('/article_replay/{id}','PostController@replay')->name('article.replay');
Route::post('/reply_del/{post}','PostController@replyDel')->name('reply.del');
Route::get('/rewrite/{post}','PostController@rewrite')->name('article.rewrite');
//
Route::post(' ','FollowController@follow');
Route::get('/followed/{id}','FollowController@followUser');
//头像上传
Route::any('/avatar/upload','EditController@avatarUpload')->name('avatar.upload');