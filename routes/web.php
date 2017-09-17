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
Route::get('index', "PostController@index");
Route::get('index/show/{id}', "PostController@show");
Route::get('index/edit/{id}', "PostController@edit")->middleware('auth');
Route::get('user/{id}', "PostController@user")->middleware('auth');
Route::post('index/comment/{id}', "CommentController@storecomment")->middleware('auth');
Route::get('index/create', "PostController@create")->middleware('auth');
Route::post('index/store', "PostController@store")->middleware('auth');
Route::delete('index/delete/{id}', "PostController@delete")->middleware('auth');
Route::patch('index/update/{id}', "PostController@update")->middleware('auth');
Route::get('user/post/{id}', "PostController@indexByUser")->middleware('auth');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
