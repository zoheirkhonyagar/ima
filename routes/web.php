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

// Route::get('/portfolio' , 'HomeController@portfolio');

// Route::get('/blog' , 'HomeController@blog')->name('blog');

Route::resource('/portfolio' , 'PortfolioController' , [
    'as' => 'main'
]);

Route::resource('/post' , 'PostController' , [
    'as' => 'main'
]);

//admin routes
Route::group([ 'prefix' => 'admin' , 'namespace' => 'Admin' , 'middleware' => 'CheckAdmin' ] , function(){

    $this->get('/' , function () {

        return view('admin.master.index');

    })->name('admin-index');

    $this->resource('portfolio' , 'PortfolioController');

    // Route::resource('faq', 'ProductFaqController', [
    //     'as' => 'prefix'
    // ]);

    $this->resource('pcat' , 'PcatController');

    $this->resource('category' , 'CategoryController');

    $this->resource('post' , 'PostController');

    $this->resource('user' , 'UserController');

    $this->get('/panel/changepassview' , 'UserController@changePasswordView')->name('change-profile-password-view');

    $this->post('/panel/changepassword' , 'UserController@changePassword')->name('change-profile-password');

    $this->post('upload-image' , 'UploadController@uploadImageSubject');
});
