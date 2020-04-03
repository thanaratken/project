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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/CreateProduct', 'admin\ProductController@create');

Route::get('/admin/CreateCategory', 'admin\CategoryController@index');
Route::post('/admin/CreateCategory', 'admin\CategoryController@store');
Route::get('/admin/EditCategory/{id}','admin\CategoryController@edit');
Route::post('/admin/UpdateCategory/{id}', 'admin\CategoryController@update');
Route::get('/admin/DeleteCategory/{id}', 'admin\CategoryController@delete');
