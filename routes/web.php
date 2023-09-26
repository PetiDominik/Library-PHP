<?php

use App\Http\Controllers\BookController;
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

Route::get('/api/books', [BookController::class, "index"]);
Route::get('/api/books/{id}', [BookController::class, "store"]);
Route::post('/api/books/', [BookController::class, "store"]);
Route::delete('/api/books/{$id}', [BookController::class, "destroy"]);
Route::put('/api/books/{$id}', [BookController::class, "update"]);

Route::get('/books', [BookController::class, "listView"]);
Route::get('/books/{id}', [BookController::class, "showView"]);
Route::get('/books/new/', [BookController::class, "storeView"]);
Route::get('/books/edit/{id}', [BookController::class, "updateView"]);
Route::get('/books/del/{id}', [BookController::class, "destroyView"]);
