<?php

use App\Http\Controllers\PageController;

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

/* -------- Page Controller -------- */

Route::get('/', 'PageController@getIndex')->name('index');

/* -------- Admin -------- */

Route::resource('/admin/roles', 'RoleController');
Route::resource('/admin/users', 'UserController');
Route::resource('/admin/courses', 'CourseController');

Route::get('/admin', 'PageController@getAdmin')->name('admin');
Route::get('/admin/homework', 'PageController@getAdminHomework')->name('adminhomework');
//Route::get('/admin/users', 'PageController@getAdminUsers')->name('adminusers');
//Route::get('/admin/courses', 'PageController@getAdminCourses')->name('admincourses');


Route::get('/home', 'HomeController@index')->name('home');