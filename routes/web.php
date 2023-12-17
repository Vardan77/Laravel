<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/info', function () {
    return 'Это новостной сайт';
});

Route::get('/hello/{name}', static function (string $name): string {
    return "Hello {$name}";
});

Route::get('/news/{id}', static function (int $id): string {
    return "Статья с ID = {$id}";
});
