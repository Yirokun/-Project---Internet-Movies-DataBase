<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use Laravel\Fortify\Features;


require __DIR__.'/settings.php';

Route::get('/', [MovieController::class, 'index']);