<?php

use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProfileController;

// Redirection à la racine
Route::get('/', function () {
    return Auth::check() ? redirect()->route('movies.index') : view('welcome');
})->name('home');

// Routes protégées
Route::middleware(['auth', 'verified'])->group(function () {

    // Profil utilisateur
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile/partials', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile/partials', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    // Catalogue et Détails
    Route::get('/movies', [MovieController::class, 'index'])->name('movies.index');
    Route::get('/movies/{id}', [MovieController::class, 'show'])->name('movie.show');

    // Panier
    Route::get('/cart', [MovieController::class, 'cart'])->name('cart.index');
    Route::post('/cart/add/{id}', [MovieController::class, 'addToCart'])->name('cart.add');
});

require __DIR__.'/auth.php';



    
   
