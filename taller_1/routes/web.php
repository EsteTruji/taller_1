<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', 'App\Http\Controllers\UserController@index')->name('users.index');
Route::get('/users/create', 'App\Http\Controllers\UserController@create')->name('users.create');
Route::get('/users/list', 'App\Http\Controllers\UserController@list')->name('users.list');
Route::post('/users/save', 'App\Http\Controllers\UserController@save')->name('users.save');
Route::get('/users/success', 'App\Http\Controllers\UserController@success')->name('users.success');
Route::get('/users/{id}', 'App\Http\Controllers\UserController@show')->name('users.show');
Route::delete('/users/{id}', 'App\Http\Controllers\UserController@delete')->name('users.delete');