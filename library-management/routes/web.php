<?php

use App\Http\Controllers\MemberController;
use App\Http\Controllers\BorrowController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\BookGenreController;
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

Route::resource('members', MemberController::class);
Route::resource('books', BookController::class);
Route::resource('genres', GenreController::class);

Route::resource('categories', BookGenreController::class)->only(['index']);
Route::resource('borrows', BorrowController::class)->only(['index']);

Route::get('genres/{genre}/books', [GenreController::class, 'booksByGenre'])->name('genres.books');
Route::get('members/{member}/borrows', [MemberController::class, 'borrowedBooks'])->name('members.borrows');

Route::get('/books/{book}/borrow', [BookController::class, 'showBorrowPage'])->name('books.borrow');
Route::post('/books/{book}/borrow', [BookController::class, 'borrow'])->name('books.borrow');
