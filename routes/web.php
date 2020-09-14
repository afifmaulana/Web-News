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

Route::get('/', function () {
    return redirect()->route('article');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/article', 'Web\ArticlesController@index')->name('article.index');
Route::get('/article/{id}', 'Web\ArticlesController@show')->name('article.show');
//Route::view('pages.article.create');