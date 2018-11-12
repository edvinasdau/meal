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
Route::get('/dishes', 'DishesController@showDays')->name('dishes');
Route::get('/monday', 'DishesController@monday')->name('single_day1');
Route::get('/tuesday', 'DishesController@tuesday')->name('single_day2');
Route::get('/wednesday', 'DishesController@wednesday')->name('single_day3');
Route::get('/thursday', 'DishesController@thursday')->name('single_day4');
Route::get('/friday', 'DishesController@friday')->name('single_day5');
Route::post('/order/store', 'OrdersController@store')->name('store');