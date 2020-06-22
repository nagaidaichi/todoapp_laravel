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
Route::get("/hello", function () {
	print("<h1>Hello World!</h1>");
	return null;
});
Route::get("/whoAreYou/{name}", function($name) {  
	return "<h1>こんにちは".$name."さん</h1>";
});  //   localhost:3000/whoAreYou/Bob アクセスしてみ！（URLに変数を埋め込むこと：ルートパラメータ）