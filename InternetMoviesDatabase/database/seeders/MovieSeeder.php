<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;

class MovieSeeder extends Seeder
{
    public function run(): void
    {
        // 1. On récupère le token depuis le .env
        $token = env('TMDB_TOKEN');

        if (!$token) {
            $this->command->error("ERREUR : Le TMDB_TOKEN n'est pas défini dans ton fichier .env !");
            return;
        }

        // 2. IDs TMDB des films Star Wars (Saga principale + Side stories)
        $tmdbIds = [
            11,     // Épisode IV : Un Nouvel Espoir
            1891,   // Épisode V : L'Empire Contre-Attaque
            1892,   // Épisode VI : Le Retour du Jedi
            1893,   // Épisode I : La Menace Fantôme
            1894,   // Épisode II : L'Attaque des Clones
            1895,   // Épisode III : La Revanche des Sith
            330459, // Épisode VII : Le Réveil de la Force
            181808, // Épisode VIII : Les Derniers Jedi
            141052, // Épisode IX : L'Ascension de Skywalker
            348350, // Solo: A Star Wars Story
            330453, // Rogue One: A Star Wars Story
        ];

        $this->command->info("Début de l'importation des films depuis TMDB...");

        foreach ($tmdbIds as $id) {
            // Appel à l'API TMDB
            $response = Http::withToken($token)
                ->get("https://api.themoviedb.org/3/movie/{$id}?language=fr-FR&append_to_response=credits");

            if ($response->successful()) {
                $data = $response->json();

                // Extraction du réalisateur
                $director = collect($data['credits']['crew'])->firstWhere('job', 'Director')['name'] ?? 'George Lucas';
                
                // Extraction des 3 premiers acteurs
                $actors = collect($data['credits']['cast'])->take(3)->pluck('name')->implode(', ');

                // Création du film dans ta base SQLite
                // NOTE : Vérifie bien si ta migration utilise 'image' ou 'image_url'
                Movie::create([
                    'title'       => $data['title'],
                    'director'    => $director,
                    'actors'      => $actors,
                    'category'    => $data['genres'][0]['name'] ?? 'Science-Fiction',
                    'description' => $data['overview'] ?? 'Pas de description disponible.',
                    'price'       => rand(14, 24) + 0.99, // Prix entre 14.99€ et 24.99€
                    'image'       => 'https://image.tmdb.org/t/p/w500' . $data['poster_path'],
                ]);

                $this->command->line("<info>✔</info> {$data['title']} ajouté.");
            } else {
                $this->command->error("✘ Impossible de récupérer le film ID {$id} (Erreur {$response->status()})");
            }
        }

        $this->command->info("Terminé ! Ta base de données est à jour.");
    }
}

?>