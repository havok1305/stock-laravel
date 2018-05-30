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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', function () {
   return "<h1>Hello, world</h1>";
});

Route::get('/test', function () {
    return "<h2>This is a test</h2>";
});

Route::get('/products', 'ProductController@list');

//Route::get('/products/show', 'ProductController@show');

//using route parameter
//Route::get('/products/show/{id}', 'ProductController@show');

//using optional route parameter
//Route::get('/products/show/{id?}', 'ProductController@show');

//allowing only numbers in the show route
Route::get('/products/show/{id}', 'ProductController@show')->where('id', '[0-9]+');