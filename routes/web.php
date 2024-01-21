<?php

use App\Http\Controllers\NewsController;
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

Route::get('/categories', [\App\Http\Controllers\CategoryController::class, 'index']);

Route::get('/news', [NewsController::class, 'index'])
    ->name('news');

Route::get('/news/{id}/show', [NewsController::class, 'show'])
    ->where('id', '\d+')->name('news.show');

Route::get('/news/{categoryId}/category', [NewsController::class, 'showByCategory'])
    ->where('categoryId', '\d+')->name('news.category');
