<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookController;

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

Route::get('/books', [BookController::class, 'index']);

Route::get('/books/{id}', [BookController::class, 'show']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/greeting/{name?}', function ($name="") {
    return view('ejemplo', ['name' => $name]);
})->where(['nombre' => '[a-z]+']);

Route::get('/saludo/{nombre}/{apellido?}', function (string $nombre, $apellido="") {
    return 'hola '.$nombre.' '.$apellido;
})->where(['nombre' => '[a-z]+', 'apellido' => '[a-z]+']);


Route::get('/suma/{n1}/{n2}', function ($n1,$n2) {
    return 'La suma de '.$n1. ' + '.$n2. ' es = '.$n1 + $n2;
})->where(['n1' => '[0-9]+', 'n2' => '[0-9]+']);

Route::get('/resta/{n1}/{n2}', function ($n1,$n2) {
    return 'La resta de '.$n1. ' - '.$n2. ' es = '.$n1 - $n2;
})->where(['n1' => '[0-9]+', 'n2' => '[0-9]+']);

Route::get('/division/{n1}/{n2}', function ($n1,$n2) {
    return 'La division de '.$n1. ' / '.$n2. ' es = '.$n1 / $n2;
})->where(['n1' => '[0-9]+', 'n2' => '[0-9]+']);

Route::get('/multiplicacion/{n1}/{n2}', function ($n1,$n2) {
    return 'La multiplicacion de '.$n1. ' x '.$n2. ' es = '.$n1 * $n2;
})->where(['n1' => '[0-9]+', 'n2' => '[0-9]+']);



Route::get('/user', [UserController::class, 'index']);