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
    return view('welcome');
});

Route::get('/','App\Http\Controllers\Blog_controller@show_blog');
Route::get('/inser-blog','App\Http\Controllers\Blog_controller@insert_blog');
Route::post('/submit-blog','App\Http\Controllers\Blog_controller@submit_blog');
Route::get('view-blog/{id}','App\Http\Controllers\Blog_controller@view_blog');

