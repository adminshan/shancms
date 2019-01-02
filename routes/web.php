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
Route::get('/order','User\order@detail');
Route::get('/user/{id}','Vip\IndexController@index');
Route::get('/add','Vip\IndexController@add');
Route::get('/update/{id}','Vip\IndexController@update');
Route::get('/delete/{id}','Vip\IndexController@delete');
Route::get('/show','Vip\IndexController@show');