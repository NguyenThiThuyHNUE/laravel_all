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

use Illuminate\Support\Facades\Route;

Route::get('/login', 'ControllerLogin@login');
Route::post('/login','ControllerLogin@CheckLogin');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::prefix('user')->group(function (){
//    Route::get('home','UserController@home')->name('user.home');
    Route::get('index','KhachhangController@getAll')->name('user.index');
    Route::get('create','KhachhangController@create')->name('user.create');
    Route::post('create','KhachhangController@store')->name('user.store');
    Route::get('show/{id}','KhachhangController@show')->name('user.show');
    Route::get('edit/{id}','KhachhangController@edit')->name('user.edit');
    Route::patch('edit/{id}','KhachhangController@update')->name('user.update');
    Route::get('{id}','KhachhangController@delete')->name('user.delete');
    Route::delete('{id}','KhachhangController@delete')->name('user.delete');

});
Route::get('search','KhachhangController@search')->name('user.search');

Route::get('hoadon','HoadonController@getAll')->name('hoadon.index');
Route::get('phongchoi','PhongchoiController@getAll')->name('phongchoi.index');


