<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Front\BlogController;
use App\Http\Controllers\Front\AboutController;
use App\Http\Controllers\Front\RentalController;
use App\Http\Controllers\Front\ContactController;

Route::get('/', function () {
    return view('front.home.index');
});

Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/rental', [RentalController::class, 'index'])->name('rental');
Route::get('/detail', [RentalController::class, 'detail'])->name('detail');
Route::get('/booking', [RentalController::class, 'booking'])->name('booking');

// Rute untuk halaman Blog Rental
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blogdetail', [BlogController::class, 'detail'])->name('blog.detail');

// Rute untuk halaman Contact
Route::get('/contact', [ContactController::class, 'index'])->name('contact');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
