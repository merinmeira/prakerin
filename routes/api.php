<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => 'cors'], function () {
    // isi Route disini
});

Route::resource('categories', 'CategoryAPIController', [
    'only' => ['index', 'show', 'store', 'update', 'destroy']
]);

Route::resource('siswa2', 'Siswa2Controller');

Route::resource('contoh', 'Contoh1Controller');
Route::resource('sekolah', 'SekolahController');
