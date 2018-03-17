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


Route::get('/about', function () {
    return view('about');
});



Auth::routes();

Route::get('/', 'PostController@getRecentPosts');

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/contact',  'ContactController@create');

Route::post('/contact',  'ContactController@store');

Route::get('/post/new',  'PostController@create');
Route::get('/post/{id}',  'PostController@getSpecificPost');

Route::post('/post/new',  'PostController@store');

Route::post('/comment/new',  'CommentController@store');

Route::post('/post/{id}/like', 'PostController@like');


