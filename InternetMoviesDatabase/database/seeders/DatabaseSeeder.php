<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // On appelle ton Seeder de films
        $this->call([
            MovieSeeder::class,
        ]);

        // Tu peux garder l'utilisateur de test si tu veux, mais c'est optionnel
        /*
        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        */
    }
}