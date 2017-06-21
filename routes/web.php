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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user/{user}/edit', 'HomeController@edit')->name('edit');
Route::get('/listUser', 'HomeController@listUser')->name('list');

Route::resource('posts','PostController');
// Route::get('/posts', 'PostController@index');
// Route::get('/posts/{post}/edit', 'PostController@edit');
// Route::post('/posts/{post}/update', 'PostController@update');
// Route::post('/posts/{post}/delete', 'PostController@destroy');
// Route::post('/posts', 'PostController@store');
// Route::get('/posts/create', 'PostController@create');


