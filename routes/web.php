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
    return view('auth.login');
});

Auth::routes();
Route::get('/home','MemberController@create');

Route::get('/profile/register','MemberController@create');
Route::post('members','MemberController@store');

Route::get('/toppage','TopController@index')->name('toppage');


Route::get('/logout','Auth\LoginController@logout')->name('logout');

Route::get('/profile/index','MemberController@show')->name('profile.index');

Route::get('/profile/{id}/edit','MemberController@edit')->name('profile.edit');
Route::post('members/edit','MemberController@update');

Route::get('/post/create','PostController@create')->name('post.create');
Route::post('posts','PostController@store');

