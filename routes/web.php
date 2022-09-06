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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/authors', [App\Http\Controllers\AuthorController::class, 'index'])->name('index');
Route::post('/authors', [App\Http\Controllers\AuthorController::class, 'create'])->name('create');
Route::get('/authors/edit/{id}', [App\Http\Controllers\AuthorController::class, 'edit'])->name('edit');
Route::put('/authors/edit/{id}', [App\Http\Controllers\AuthorController::class, 'update'])->name('update');
Route::get('/authors/delete/{id}', [App\Http\Controllers\AuthorController::class, 'destroy'])->name('destroy');


Route::get('/books', [App\Http\Controllers\BookController::class, 'index'])->name('index');
Route::post('/books', [App\Http\Controllers\BookController::class, 'create'])->name('create');
Route::get('/books/edit/{id}', [App\Http\Controllers\BookController::class, 'edit'])->name('edit');
Route::put('/books/edit/{id}', [App\Http\Controllers\BookController::class, 'update'])->name('update');
Route::get('/books/delete/{id}', [App\Http\Controllers\BookController::class, 'destroy'])->name('destroy');