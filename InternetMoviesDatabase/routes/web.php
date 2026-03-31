<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use Laravel\Fortify\Features;
use App\Models\Movie;

require __DIR__.'/settings.php';

Route::get('/', [MovieController::class, 'index']);


Route::get('/movie/{id}', function ($id) {
    $movie = Movie::findOrFail($id);
    
    return view('movie-details', compact('movie'));
});
