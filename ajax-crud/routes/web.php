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

Route::get('/', "TaskController@index");

Route::get('/tasks/{task_id?}',"TaskController@getTask");

Route::post('/tasks', "TaskController@createTask");

Route::put('/tasks/{task_id?}',"TaskController@editTask");

Route::delete('/tasks/{task_id?}',"TaskController@deleteTask");