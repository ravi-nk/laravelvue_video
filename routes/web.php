<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout','HomeController@logout')->name('logout');
Route::get('admin/dashboard','HomeController@handleAdmin')->name('admin.dashboard')->middleware('admin');

Route::get('/admin/add_item', 'Admin\AdminController@add_item')->name('admin.add_item');

Route::get('/admin/login','Admin\AdminController@login');


