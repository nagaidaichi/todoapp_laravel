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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/ff', function () {
    print("<h1>Hello World!</h1>");
	return null;
});
Route::resource('tasks', 'TaskController');
Route::resource('statuses', 'StatusController');