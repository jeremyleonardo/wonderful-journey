<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();
Route::get('/welcome', function() {return view('welcome');})->name('welcome')->middleware('auth');
Route::get('/about', function() {return view('about');})->name('about');

Route::get('/', 'ArticleController@index')->name('home');

Route::get('/article', 'ArticleController@index')->name('article.index');
Route::get('/article/{id}', 'ArticleController@show')->name('article.show');
Route::get('/article/category/{category_id}', 'ArticleController@indexByCategory')->name('article.index-by-category');

Route::get('/user/article', 'ArticleUserController@index')->name('user.article.index');
Route::delete('/user/article/{id}', 'ArticleUserController@destroy')->name('user.article.destroy');
Route::get('/user/article/create', 'ArticleUserController@create')->name('user.article.create');
Route::post('/user/article', 'ArticleUserController@store')->name('user.article.store');

Route::get('/user/edit', 'UserUserController@edit')->name('user.user.edit');
Route::put('/user', 'UserUserController@update')->name('user.user.update');

Route::get('/admin/user', 'UserAdminController@index')->name('admin.user.index');
Route::delete('/admin/user/{id}', 'UserAdminController@destroy')->name('admin.user.destroy');
Route::get('/admin/article', 'ArticleAdminController@index')->name('admin.article.index');
Route::delete('/admin/article/{id}', 'ArticleAdminController@destroy')->name('admin.article.destroy');