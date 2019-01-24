<?php

use App\User;
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
    return view('welcome');
});

/* Admin User Routes */

Route::group(['middleware'=>'admin'], function () {

    Route::resource('admin/user','AdminUserController');

    Route::resource('admin/post','AdminPostController');

    Route::resource('admin/category','AdminCategoryController');

});



Route::get('admin',function () {
    return view('admin.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
