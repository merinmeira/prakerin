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
    return view('index');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/admin', function () {
    return view('welcome');
});

Route::resource('admin/artikel', 'ArtikelController');
route::resource('admin/tag', 'TagController');
route::resource('admin/kategori', 'KategoriController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
