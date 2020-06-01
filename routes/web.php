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

Route::get('/', function () {
    return view('app.pages.home');
});

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    Route::post('/posts/{id}/likes', 'PostController@like');
    Route::get('/profile', 'ProfileController@edit')->name('profile');
    Route::put('/profile/update', 'ProfileController@update')->name('profile.update');
    Route::put('/profile/password', 'ProfileController@password')->name('profile.password');
});

Route::get('/posts', 'PostController@index')->name('posts');
Route::get('/posts/{slug}', 'PostController@show')->name('posts.show');
