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



Route::get('/',"admincontroller@welcome");
Route::get('/contact',"admincontroller@contact");
Route::post('/register',"adminController@register");
Route::get('/TM',"adminController@TM");
Route::get('/GI',"adminController@GI");
Route::get('/description',"admincontroller@description");
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('students','STDController');

