<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CopyController;
use App\Http\Controllers\BorrowController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StatisticController;

Route::get('/', function () { return view('welcome'); });
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/profile', [AuthController::class, 'profile'])->middleware('auth')->name('profile');

Route::middleware(['auth', 'checkrole:admin'])->group(function () {
    Route::get('/books/create', [BookController::class, 'create'])->name('books.create');
    Route::post('/books', [BookController::class, 'store'])->name('books.store');
    Route::get('/books/{book}/edit', [BookController::class, 'edit'])->name('books.edit');
    Route::put('/books/{book}', [BookController::class, 'update'])->name('books.update');
    Route::delete('/books/{book}', [BookController::class, 'destroy'])->name('books.destroy');
    Route::get('/borrows/create', [BorrowController::class, 'create'])->name('borrows.create');
    Route::post('/borrows', [BorrowController::class, 'store'])->name('borrows.store');
    Route::get('/borrows', [BorrowController::class, 'index'])->name('borrows.index');
    Route::post('/borrows/{borrow}/return', [BorrowController::class, 'returnBook'])->name('borrows.return');
    Route::resource('copies', CopyController::class)->except('index'); 
    Route::get('/copies/create', [CopyController::class, 'create'])->name('copies.create');
    Route::get('/copies/{book?}', [CopyController::class, 'index'])->name('copies.index');
    Route::resource('copies', CopyController::class)->except('index');
});

Route::get('/books', [BookController::class, 'index'])->name('books.index');
Route::get('/books/{book}', [BookController::class, 'show'])->name('books.show');

 


Route::get('/users/{user}/borrows', [UserController::class, 'showBorrows'])->name('users.borrows');
Route::resource('users', UserController::class)->middleware(['auth', 'checkrole:admin']);

Route::get('/profile/borrows', [BorrowController::class, 'userBorrows'])->name('profile.borrows')->middleware('auth');

Route::get('/statistics', [StatisticController::class, 'index'])->name('statistics.index')->middleware(['auth', 'checkrole:admin']);