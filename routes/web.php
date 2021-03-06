<?php
use Illuminate\Http\Request;

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

Route::post('/files/upload', 'ImagenController@uploadImagen');
Route::get('/pruebapeticionget', function(Request $request){
    return $request->name;
});

// pruebapeticionget

Route::get('/', function () {
    return view('maps');
});
Route::get('/autocompletador', function () {
    return view('autocompletador');
})->name('autocompletador');

Route::get('/direccionrender', function () {
    return view('direccionrender');
})->name('direccionrender');
