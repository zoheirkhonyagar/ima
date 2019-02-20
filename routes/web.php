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


Route::get('/' , 'HomeController@index')->name('index');

Auth::routes();

Route::get('/about-us' , 'HomeController@aboutUs')->name('about-us');

Route::get('/portfolio' , 'HomeController@portfolio')->name('portfolio');

Route::get('/blog' , 'HomeController@blog')->name('blog');
