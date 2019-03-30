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


// pass using function
Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', 'PostController@index')->name('posts.index');
Route::get('/posts/create', 'PostController@create')->name('posts.create');
//inside{} is the id 
Route::get('/posts/{post}/edit', 'PostController@edit')->name('posts.edit');
Route::post('/posts', 'PostController@store')->name('posts.store');
Route::post('/posts/{post}', 'PostController@update')->name('posts.update');
Route::post('/posts/{post}/delete', 'PostController@delete')->name('posts.delete');



Auth::routes();

// pass using controller
Route::get('/home', 'HomeController@index')->name('home');
// index is a method

Route::get('/abc', 'abccontroller@index')->name('abc');