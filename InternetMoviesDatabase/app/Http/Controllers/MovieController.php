<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\CartItem;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    
    public function index()
    {
        $categories = Movie::distinct()->pluck('category');

        return view('movies.index', compact('categories'));
    }
    
    public function show($id)
    {
        
        $movie = Movie::findOrFail($id);

        return view('movie-details', compact('movie'));
    }

    
    public function cart()
    {
        return view('cart');
    }

    
    public function addToCart($id)
    {
        $exists = CartItem::where('user_id', auth()->id())->where('movie_id', $id)->exists();

        if ($exists) {
            return redirect()->back()->with('success', 'Cet article est déjà dans votre cargaison.');
        }

        CartItem::create(['user_id' => auth()->id(), 'movie_id' => $id]);

        return redirect()->back()->with('success', 'Transmission reçue : Film ajouté à la cargaison.');
    }
}