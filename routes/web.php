<?php

use App\Http\Controllers\TaskController;
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

Route::get('/', 'App\Http\Controllers\TaskController@home')->name('home');
Route::get('add-task', 'App\Http\Controllers\TaskController@addTask')->name('add-task');
Route::post('store-task', 'App\Http\Controllers\TaskController@storeTask')->name('store-task');
Route::get('edit-task/{id}', 'App\Http\Controllers\TaskController@editTask')->name('edit-task');
Route::post('update-task/{id}', 'App\Http\Controllers\TaskController@updateTask')->name('update-task');
