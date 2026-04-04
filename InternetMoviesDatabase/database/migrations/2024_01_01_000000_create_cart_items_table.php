<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cart_items', function (Blueprint $class) {
            $class->id();
            $class->foreignId('user_id')->constrained()->onDelete('cascade');
            $class->foreignId('movie_id')->constrained()->onDelete('cascade');
            $class->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cart_items');
    }
};