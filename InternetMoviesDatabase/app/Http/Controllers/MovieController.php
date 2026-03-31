<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource. (Page d'accueil)
     */
    public function index(Request $request)
    {
        $search = $request->input('search');

        $movies = \App\Models\Movie::when($search, function ($query, $search) {
            return $query->where('title', 'like', "%{$search}%")
                        ->orWhere('director', 'like', "%{$search}%");
        })->get();

        return view('app', compact('movies'));
    }

    /**
     * Display the specified resource. (Page de détails)
     */
    public function show(Movie $movie)
    {
        // On affiche un seul film précis
        return view('movies.show', compact('movie'));
    }

}