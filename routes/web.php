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

Route::get('/', 'App\Http\Controllers\HomeController@index');

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

Route::resource("goals", "App\Http\Controllers\GoalController");

Route::resource("goals.todos", "App\Http\Controllers\TodoController");

Route::post('/goals/{goal}/todos/{todo}/sort', 'App\Http\Controllers\TodoController@sort')->middleware('auth');

Route::resource("tags", "App\Http\Controllers\TagController")->middleware('auth');

Route::post('/goals/{goal}/todos/{todo}/tags/{tag}', 'App\Http\Controllers\TodoController@addTag')->middleware('auth');

Route::delete('/goals/{goal}/todos/{todo}/tags/{tag}', 'App\Http\Controllers\TodoController@removeTag')->middleware('auth');

Auth::routes();
