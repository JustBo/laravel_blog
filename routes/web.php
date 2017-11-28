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

Auth::routes();

Route::get('/', 'Pages\HomeController@index')->name('home');
Route::get('/home', 'Pages\HomeController@index')->name('home');
Route::get('/about', 'Pages\AboutController@index')->name('about');
Route::get('/projects', 'Pages\ProjectsController@index')->name('projects');
Route::get('/blog', 'Pages\BlogController@index')->name('blog');
Route::get('/contact', 'Pages\ContactController@index')->name('contact');

Route::get('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');


// Admin routes
Route::prefix('admin')->group(function () {
    Route::get('login', 'Auth\AdminLoginController@index')->name('admin.login');
    Route::post('login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
});
