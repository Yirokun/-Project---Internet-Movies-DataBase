<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MovieController;
use App\Livewire\CartPage;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Volt::route('/cart', 'cart-page')->name('cart');
});

Route::get('/', [MovieController::class, 'index'])->name('home');



Route::get('/movies/{movie}', [MovieController::class, 'show'])->name('movie.show');

require __DIR__.'/auth.php';
