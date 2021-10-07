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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/gallery', 'GalleryController@index')->name('gallery');
Route::get('/blog', 'BlogController@index')->name('blog');
Route::get('/contact', 'ContactController@index')->name('contact');
