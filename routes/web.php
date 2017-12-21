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

// users auth
// Auth::routes();
Route::get('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');
Route::get('/redirect', 'Auth\SocialAuthFacebookController@redirect')->name('facebook.redirect');
Route::get('/callback', 'Auth\SocialAuthFacebookController@callback')->name('facebook.callback');

Route::post('/login', 'Auth\LoginController@postLogin')->name('api.login');
Route::post('/register', 'Auth\RegisterController@postRegister')->name('api.register');


Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/projects', 'ProjectsController@index')->name('projects');
Route::get('/projects/{id}', 'ProjectsController@details')->name('project.details');

Route::get('/blog', 'BlogController@index')->name('blog');
Route::get('/blog/{id}', 'BlogController@details')->name('blog.details');
Route::post('/blog/{id}', 'BlogController@store_comment')->name('blog.store_comment');
Route::delete('/blog/{id}', 'BlogController@destroy_comment')->name('blog.destroy_comment');

Route::get('/contact', 'ContactController@index')->name('contact');
Route::post('/contact', 'ContactController@send')->name('contact.send');

// Admin routes
Route::prefix('admin')->group(function () {
  //logins routes
    Route::get('login', 'Auth\AdminLoginController@index')->name('admin.login');
    Route::post('login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
    Route::middleware('auth:admin')->group(function () {
      Route::get('/', 'AdminController@index')->name('admin.dashboard');
      //content routes
      Route::resource('blog', 'Admin\BlogController', ['as'=>'admin']);
      Route::resource('projects', 'Admin\ProjectsController', ['as'=>'admin']);
      Route::resource('category', 'Admin\CategoryController', ['as'=>'admin']);
      Route::resource('skills', 'Admin\SkillsController', ['as'=>'admin']);
      Route::resource('education', 'Admin\EducationController', ['as'=>'admin']);
      Route::resource('experience', 'Admin\ExperienceController', ['as'=>'admin']);
      //administrations routes
      Route::get('/user', 'Admin\UserController@index')->name('admin.user');
      Route::delete('/user/{id}/destroy', 'Admin\UserController@destroy')->name('admin.user.destroy');
    });
});
