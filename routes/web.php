<?php

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

Route :: get ('/', 'ProductController@index');
Route :: get ('add-product','ProductController@create');
Route :: post ('add-product','ProductController@store');
Route :: get ('edit-product/{product}','ProductController@edit');
Route :: put ('edit-product/{product}','ProductController@update');
Route :: delete ('delete/{product}','ProductController@delete');


Route :: get ('/category', 'CatgegoryController@index');
Route :: get ('add-category','CatgegoryController@create');
Route :: post ('add-category','CatgegoryController@store');

Route::get('/home', function () {
    return view('home');
});