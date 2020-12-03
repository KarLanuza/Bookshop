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

Route::get('/', function () {
    return view('home');
});

Route::get('/books', 'App\Http\Controllers\BooksController@index');
Route::get('/books/{id}', 'App\Http\Controllers\BooksController@show');
Route::post('/books', 'App\Http\Controllers\BooksController@store');
Route::POST('/books/{id}', 'App\Http\Controllers\BooksController@update');

Route::get('/authors', 'App\Http\Controllers\AuthorsController@index');
Route::get('/authors/{id}', 'App\Http\Controllers\AuthorsController@show');
Route::post('/authors', 'App\Http\Controllers\AuthorsController@store');
Route::POST('/authors/{id}', 'App\Http\Controllers\AuthorsController@update');
