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
Auth::routes();
Route::get('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');
Route::get('/redirect', 'Auth\SocialAuthFacebookController@redirect')->name('facebook.redirect');
Route::get('/callback', 'Auth\SocialAuthFacebookController@callback')->name('facebook.callback');


Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about', 'AboutController@index')->name('about');
Route::get('/projects', 'ProjectsController@index')->name('projects');
Route::get('/blog', 'BlogController@index')->name('blog');
Route::get('/contact', 'ContactController@index')->name('contact');

// Admin routes
Route::prefix('admin')->group(function () {
  //logins routes
    Route::get('login', 'Auth\AdminLoginController@index')->name('admin.login');
    Route::post('login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
    Route::middleware('auth:admin')->group(function () {
      Route::get('/', 'AdminController@index')->name('admin.dashboard');
      //content routes
      //blog routes
      Route::get('/blog', 'Admin\BlogController@index')->name('admin.blog');
      Route::get('/blog/create', 'Admin\BlogController@create')->name('admin.blog.create');
      Route::get('/blog/{id}', 'Admin\BlogController@edit')->name('admin.blog.edit');
      Route::post('/blog/create', 'Admin\BlogController@store')->name('admin.blog.store');

      Route::get('/projects', 'Admin\ProjectsController@index')->name('admin.projects');

      Route::get('/categories', 'Admin\CategoryController@index')->name('admin.categories');

      Route::get('/skills', 'Admin\SkillsController@index')->name('admin.skills');
      Route::get('/education', 'Admin\EducationController@index')->name('admin.education');
      Route::get('/experience', 'Admin\ExperienceController@index')->name('admin.experience');
      //administrations routes
      Route::get('/user', 'Admin\UserController@index')->name('admin.user');
    });
});
