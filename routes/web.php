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
use App\Category;
Route::get('/', function () {
    $categories = Category::all();
    return view('index', compact('categories'));
});

Route::get('category/insert', 'categoryController@store');
Route::get('category/get/{id}', 'categoryController@show');
Route::get('category/update/{id}', 'categoryController@update');
Route::get('category/delete/{id}', 'categoryController@destroy');

Route::get('product/insert', 'productController@store');
Route::get('product/get/{id}', 'productController@show');
Route::get('product/update/{id}', 'productController@update');
Route::get('product/delete/{id}', 'productController@destroy');