<?php

use App\Http\Controllers\ShortenerController;
use App\Http\Controllers\ShortUrlController;
use App\Http\Controllers\ShortUserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
Route::get('/links', [ShortUserController::class, 'index'])->name('user.links')->middleware('auth');

Route::post('/short', [ShortUrlController::class, 'short'])->name('short.url');
Route::get('/{code}', [ShortUrlController::class, 'show'])->name('short.show');
