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
      Route::post('/blog/{id}', 'Admin\BlogController@update')->name('admin.blog.update');
      Route::delete('/blog/{id}', 'Admin\BlogController@destroy')->name('admin.blog.destroy');

      Route::get('/projects', 'Admin\ProjectsController@index')->name('admin.projects');
      Route::get('/projects/create', 'Admin\ProjectsController@create')->name('admin.projects.create');
      Route::get('/projects/{id}', 'Admin\ProjectsController@edit')->name('admin.projects.edit');
      Route::post('/projects/create', 'Admin\ProjectsController@store')->name('admin.projects.store');
      Route::post('/projects/{id}', 'Admin\ProjectsController@update')->name('admin.projects.update');
      Route::delete('/projects/{id}', 'Admin\ProjectsController@destroy')->name('admin.projects.destroy');

      Route::get('/categories', 'Admin\CategoryController@index')->name('admin.categories');
      Route::get('/categories/create', 'Admin\CategoryController@create')->name('admin.category.create');
      Route::get('/categories/{id}', 'Admin\CategoryController@edit')->name('admin.category.edit');
      Route::post('/categories/create', 'Admin\CategoryController@store')->name('admin.category.store');
      Route::post('/categories/{id}', 'Admin\CategoryController@update')->name('admin.category.update');
      Route::delete('/categories/{id}', 'Admin\CategoryController@destroy')->name('admin.category.destroy');

      Route::get('/skills', 'Admin\SkillsController@index')->name('admin.skills');
      Route::get('/skills/create', 'Admin\SkillsController@create')->name('admin.skills.create');
      Route::get('/skills/{id}', 'Admin\SkillsController@edit')->name('admin.skills.edit');
      Route::post('/skills/create', 'Admin\SkillsController@store')->name('admin.skills.store');
      Route::post('/skills/{id}', 'Admin\SkillsController@update')->name('admin.skills.update');
      Route::delete('/skills/{id}', 'Admin\SkillsController@destroy')->name('admin.skills.destroy');

      Route::get('/education', 'Admin\EducationController@index')->name('admin.education');
      Route::get('/education/create', 'Admin\EducationController@create')->name('admin.education.create');
      Route::get('/education/{id}', 'Admin\EducationController@edit')->name('admin.education.edit');
      Route::post('/education/create', 'Admin\EducationController@store')->name('admin.education.store');
      Route::post('/education/{id}', 'Admin\EducationController@update')->name('admin.education.update');
      Route::delete('/education/{id}', 'Admin\EducationController@destroy')->name('admin.education.destroy');


      Route::get('/experience', 'Admin\ExperienceController@index')->name('admin.experience');
      Route::get('/experience/create', 'Admin\ExperienceController@create')->name('admin.experience.create');
      Route::get('/experience/{id}', 'Admin\ExperienceController@edit')->name('admin.experience.edit');
      Route::post('/experience/create', 'Admin\ExperienceController@store')->name('admin.experience.store');
      Route::post('/experience/{id}', 'Admin\ExperienceController@update')->name('admin.experience.update');
      Route::delete('/experience/{id}', 'Admin\ExperienceController@destroy')->name('admin.experience.destroy');
      //administrations routes
      Route::get('/user', 'Admin\UserController@index')->name('admin.user');
    });
});
