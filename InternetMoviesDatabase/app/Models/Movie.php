<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['title', 'director', 'actors', 'category', 'description', 'price', 'image'])]
class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 
        'director', 
        'actors', 
        'category', 
        'description', 
        'price', 
        'image'
    ];
}
