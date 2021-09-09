<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/getRickrolled', function () {
    return '<a href=https://www.youtube.com/watch?v=dQw4w9WgXcQ>not Google<a>';
});

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');
Route::resource('posts', 'FeedController');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
