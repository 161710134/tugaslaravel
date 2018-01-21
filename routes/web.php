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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/test1', 'AboutController@index1');

Route::get('/test2', 'SilatController@index2');

Route::get('/test3', 'AboutController@index3');

Route::get('/test4', 'AboutController@index4');

Route::get('/test5', 'AboutController@index5');

