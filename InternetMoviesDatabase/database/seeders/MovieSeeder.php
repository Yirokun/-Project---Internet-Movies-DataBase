<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $movies = [
            // --- SAGA STAR WAR (FILMS) ---

            // Épisode I
            [
                'title' => 'Star Wars: Épisode I - La Menace Fantôme',
                'director' => 'George Lucas',
                'actors' => 'Liam Neeson, Ewan McGregor, Natalie Portman',
                'category' => 'Science-Fiction',
                'description' => 'Le début de la saga Skywalker alors qu\'un jeune Anakin est découvert sur Tatooine.',
                'price' => 19.99,
                'image' => 'https://images.unsplash.com/photo-1579373903781-fd5c0c30c4cd?w=800',
            ],
            [
                'title' => 'Star Wars: Épisode I - La Menace Fantôme (Édition Collector)',
                'director' => 'George Lucas',
                'actors' => 'Liam Neeson, Ewan McGregor, Natalie Portman',
                'category' => 'Collector',
                'description' => 'Édition limitée avec boîtier métal et réplique miniature du podracer d\'Anakin.',
                'price' => 149.99,
                'image' => 'https://images.unsplash.com/photo-1579373903781-fd5c0c30c4cd?w=800',
            ],

            // Épisode II
            [
                'title' => 'Star Wars: Épisode II - L\'Attaque des Clones',
                'director' => 'George Lucas',
                'actors' => 'Ewan McGregor, Natalie Portman, Hayden Christensen',
                'category' => 'Science-Fiction',
                'description' => 'Anakin Skywalker et Obi-Wan Kenobi enquêtent sur un complot séparatiste.',
                'price' => 19.99,
                'image' => 'https://images.unsplash.com/photo-1623939012331-9b8119b2780e?w=800',
            ],
            [
                'title' => 'Star Wars: Épisode II - L\'Attaque des Clones (Édition Collector)',
                'director' => 'George Lucas',
                'actors' => 'Ewan McGregor, Natalie Portman, Hayden Christensen',
                'category' => 'Collector',
                'description' => 'Coffret prestige incluant le script original et des lithographies de la Bataille de Geonosis.',
                'price' => 135.00,
                'image' => 'https://images.unsplash.com/photo-1623939012331-9b8119b2780e?w=800',
            ],

            // Épisode III
            [
                'title' => 'Star Wars: Épisode III - La Revanche des Sith',
                'director' => 'George Lucas',
                'actors' => 'Ewan McGregor, Natalie Portman, Hayden Christensen',
                'category' => 'Science-Fiction',
                'description' => 'La chute tragique d\'Anakin Skywalker et la naissance de Dark Vador.',
                'price' => 22.99,
                'image' => 'https://images.unsplash.com/photo-1608346128025-1896b97a6fa7?w=800',
            ],
            [
                'title' => 'Star Wars: Épisode III - La Revanche des Sith (Édition Collector)',
                'director' => 'George Lucas',
                'actors' => 'Ewan McGregor, Natalie Portman, Hayden Christensen',
                'category' => 'Collector',
                'description' => 'Édition ultime avec buste de Dark Vador et disque bonus de 5 heures sur les coulisses.',
                'price' => 179.99,
                'image' => 'https://images.unsplash.com/photo-1608346128025-1896b97a6fa7?w=800',
            ],

            // Épisode IV
            [
                'title' => 'Star Wars: Épisode IV - Un Nouvel Espoir',
                'director' => 'George Lucas',
                'actors' => 'Mark Hamill, Harrison Ford, Carrie Fisher',
                'category' => 'Science-Fiction',
                'description' => 'Le film légendaire de 1977 qui a lancé toute la galaxie Star Wars.',
                'price' => 24.99,
                'image' => 'https://images.unsplash.com/photo-1585366119957-e9730b6d0f60?w=800',
            ],
            [
                'title' => 'Star Wars: Épisode IV - Un Nouvel Espoir (Collector Anniversaire)',
                'director' => 'George Lucas',
                'actors' => 'Mark Hamill, Harrison Ford, Carrie Fisher',
                'category' => 'Collector',
                'description' => 'Édition remastérisée 4K avec certificat d\'authenticité et artwork exclusif de Ralph McQuarrie.',
                'price' => 199.00,
                'image' => 'https://images.unsplash.com/photo-1585366119957-e9730b6d0f60?w=800',
            ],

            // Épisode V
            [
                'title' => 'Star Wars: Épisode V - L\'Empire Contre-Attaque',
                'director' => 'Irvin Kershner',
                'actors' => 'Mark Hamill, Harrison Ford, Carrie Fisher',
                'category' => 'Science-Fiction',
                'description' => 'Les rebelles sont pourchassés par l\'Empire et Luke rencontre Yoda.',
                'price' => 24.99,
                'image' => 'https://images.unsplash.com/photo-1594736797933-d0501ba2fe65?w=800',
            ],
            [
                'title' => 'Star Wars: Épisode V - L\'Empire Contre-Attaque (Édition Collector)',
                'director' => 'Irvin Kershner',
                'actors' => 'Mark Hamill, Harrison Ford, Carrie Fisher',
                'category' => 'Collector',
                'description' => 'Coffret monumental en forme de casque de Stormtrooper avec bonus exclusifs.',
                'price' => 220.00,
                'image' => 'https://images.unsplash.com/photo-1594736797933-d0501ba2fe65?w=800',
            ],

            // Épisode VI
            [
                'title' => 'Star Wars: Épisode VI - Le Retour du Jedi',
                'director' => 'Richard Marquand',
                'actors' => 'Mark Hamill, Harrison Ford, Carrie Fisher',
                'category' => 'Science-Fiction',
                'description' => 'La conclusion épique du combat contre l\'Empereur et la rédemption d\'un père.',
                'price' => 24.99,
                'image' => 'https://images.unsplash.com/photo-1618336753974-aae8e04506aa?w=800',
            ],
            [
                'title' => 'Star Wars: Épisode VI - Le Retour du Jedi (Collector Steelbook)',
                'director' => 'Richard Marquand',
                'actors' => 'Mark Hamill, Harrison Ford, Carrie Fisher',
                'category' => 'Collector',
                'description' => 'Édition limitée en métal avec le poster original de la sortie cinéma.',
                'price' => 165.00,
                'image' => 'https://images.unsplash.com/photo-1618336753974-aae8e04506aa?w=800',
            ],

            // --- ANIMATION STAR WARS ---

            // 1. Star Wars: The Clone Wars
            [
                'title' => 'Star Wars: The Clone Wars',
                'director' => 'Dave Filoni',
                'actors' => 'Matt Lanter, Ashley Eckstein, James Arnold Taylor',
                'category' => 'Animation',
                'description' => 'Le long-métrage d\'animation qui a lancé la célèbre série sur la guerre des clones.',
                'price' => 19.99,
                'image' => 'https://images.unsplash.com/photo-1585366119957-e9730b6d0f60?w=800',
            ],
            [
                'title' => 'Star Wars: The Clone Wars (Édition Collector)',
                'director' => 'Dave Filoni',
                'actors' => 'Matt Lanter, Ashley Eckstein, James Arnold Taylor',
                'category' => 'Collector Animation',
                'description' => 'Coffret prestige incluant le film en 4K, un livret de storyboards et une figurine d\'Ahsoka Tano.',
                'price' => 189.99,
                'image' => 'https://images.unsplash.com/photo-1585366119957-e9730b6d0f60?w=800',
            ],

            // 2. Star Wars Rebels
            [
                'title' => 'Star Wars Rebels: Prémices',
                'director' => 'Dave Filoni',
                'actors' => 'Taylor Gray, Freddie Prinze Jr., Vanessa Marshall',
                'category' => 'Animation',
                'description' => 'L\'aventure commence pour l\'équipage du Ghost contre l\'Empire naissant.',
                'price' => 24.99,
                'image' => 'https://images.unsplash.com/photo-1618336753974-aae8e04506aa?w=800',
            ],
            [
                'title' => 'Star Wars Rebels (Collector Steelbook)',
                'director' => 'Dave Filoni',
                'actors' => 'Taylor Gray, Freddie Prinze Jr., Vanessa Marshall',
                'category' => 'Collector Animation',
                'description' => 'L\'intégrale des films pilotes en boîtier métal avec lithographies exclusives.',
                'price' => 145.00,
                'image' => 'https://images.unsplash.com/photo-1618336753974-aae8e04506aa?w=800',
            ],

            // 3. Star Wars: Visions
            [
                'title' => 'Star Wars: Visions - Volume 1',
                'director' => 'Multiples Studios',
                'actors' => 'Divers doubleurs (VF/VO)',
                'category' => 'Animation',
                'description' => 'Une anthologie de courts-métrages par les plus grands studios d\'animation japonais.',
                'price' => 29.99,
                'image' => 'https://images.unsplash.com/photo-1478479405421-ce83c92fb3ba?w=800',
            ],
            [
                'title' => 'Star Wars: Visions (Art Edition Collector)',
                'director' => 'Multiples Studios',
                'actors' => 'Divers doubleurs (VF/VO)',
                'category' => 'Collector Animation',
                'description' => 'Édition spéciale avec un artbook de 200 pages sur la conception des différents styles d\'animation.',
                'price' => 199.99,
                'image' => 'https://images.unsplash.com/photo-1478479405421-ce83c92fb3ba?w=800',
            ],

            // 4. LEGO Star Wars: La Menace Padawan
            [
                'title' => 'LEGO Star Wars: La Menace Padawan',
                'director' => 'David Scott',
                'actors' => 'Anthony Daniels, Nika Futterman',
                'category' => 'LEGO Animation',
                'description' => 'L\'humour LEGO s\'empare de la galaxie dans cette aventure délirante.',
                'price' => 14.99,
                'image' => 'https://images.unsplash.com/photo-1558624222-72a0f71c63f8?w=800',
            ],
            [
                'title' => 'LEGO Star Wars: La Menace Padawan (Minifigure Edition)',
                'director' => 'David Scott',
                'actors' => 'Anthony Daniels, Nika Futterman',
                'category' => 'Collector LEGO',
                'description' => 'Inclut une figurine exclusive de Han Solo jeune uniquement disponible dans ce pack.',
                'price' => 110.00,
                'image' => 'https://images.unsplash.com/photo-1558624222-72a0f71c63f8?w=800',
            ],

            // 5. Star Wars: The Bad Batch
            [
                'title' => 'Star Wars: The Bad Batch - L\'Escouade 99',
                'director' => 'Brad Rau',
                'actors' => 'Dee Bradley Baker, Michelle Ang',
                'category' => 'Animation',
                'description' => 'Suivez les missions périlleuses d\'un groupe de clones d\'élite génétiquement modifiés.',
                'price' => 22.50,
                'image' => 'https://images.unsplash.com/photo-1594736797933-d0501ba2fe65?w=800',
            ],
            [
                'title' => 'Star Wars: The Bad Batch (Tactical Collector Box)',
                'director' => 'Brad Rau',
                'actors' => 'Dee Bradley Baker, Michelle Ang',
                'category' => 'Collector Animation',
                'description' => 'Boîte collector contenant des patchs brodés de l\'unité et des dossiers secrets de mission.',
                'price' => 165.00,
                'image' => 'https://images.unsplash.com/photo-1594736797933-d0501ba2fe65?w=800',
            ],

            // 6. Star Wars: Tales of the Jedi
            [
                'title' => 'Star Wars: Tales of the Jedi',
                'director' => 'Dave Filoni',
                'actors' => 'Ashley Eckstein, Corey Burton',
                'category' => 'Animation',
                'description' => 'Des récits courts centrés sur des Jedi emblématiques comme Ahsoka Tano et le Comte Dooku.',
                'price' => 19.99,
                'image' => 'https://images.unsplash.com/photo-1579373903781-fd5c0c30c4cd?w=800',
            ],
            [
                'title' => 'Star Wars: Tales of the Jedi (Gold Holocron Edition)',
                'director' => 'Dave Filoni',
                'actors' => 'Ashley Eckstein, Corey Burton',
                'category' => 'Collector Animation',
                'description' => 'Une réplique d\'holocron servant de boîtier de rangement pour les disques.',
                'price' => 250.00,
                'image' => 'https://images.unsplash.com/photo-1579373903781-fd5c0c30c4cd?w=800',
            ],

            // 7. LEGO Star Wars: Joyeuses Fêtes
            [
                'title' => 'LEGO Star Wars: Joyeuses Fêtes',
                'director' => 'Ken Cunningham',
                'actors' => 'Kelly Marie Tran, Billy Dee Williams',
                'category' => 'LEGO Animation',
                'description' => 'Rey voyage dans le temps et rencontre les héros du passé pour célébrer le jour de la vie.',
                'price' => 15.99,
                'image' => 'https://images.unsplash.com/photo-1451187580459-43490279c0fa?w=800',
            ],
            [
                'title' => 'LEGO Star Wars: Joyeuses Fêtes (Holiday Bundle)',
                'director' => 'Ken Cunningham',
                'actors' => 'Kelly Marie Tran, Billy Dee Williams',
                'category' => 'Collector LEGO',
                'description' => 'Inclus un pull de Noël exclusif aux couleurs de Dark Vador et LEGO.',
                'price' => 125.00,
                'image' => 'https://images.unsplash.com/photo-1451187580459-43490279c0fa?w=800',
            ],

            // 8. Star Wars: Resistance
            [
                'title' => 'Star Wars Resistance: Le Vol du Colossus',
                'director' => 'Justin Ridge',
                'actors' => 'Christopher Sean, Suzie McGrath',
                'category' => 'Animation',
                'description' => 'Kazuda Xiono est recruté par la Résistance pour espionner le Premier Ordre.',
                'price' => 21.99,
                'image' => 'https://images.unsplash.com/photo-1446776811953-b23d57bd21aa?w=800',
            ],
            [
                'title' => 'Star Wars Resistance (Ace Pilot Collector Set)',
                'director' => 'Justin Ridge',
                'actors' => 'Christopher Sean, Suzie McGrath',
                'category' => 'Collector Animation',
                'description' => 'Édition collector avec un modèle réduit du vaisseau de Kaz.',
                'price' => 155.00,
                'image' => 'https://images.unsplash.com/photo-1446776811953-b23d57bd21aa?w=800',
            ],

            // 9. LEGO Star Wars: L'Empire en Vrac
            [
                'title' => 'LEGO Star Wars: L\'Empire en Vrac',
                'director' => 'Guy Vasilovich',
                'actors' => 'A.J. LoCascio, John DiMaggio',
                'category' => 'LEGO Animation',
                'description' => 'Après la destruction de l\'Étoile de la Mort, l\'Empire tente de se reconstruire avec humour.',
                'price' => 14.99,
                'image' => 'https://images.unsplash.com/photo-1546776310-eef45dd6d336?w=800',
            ],
            [
                'title' => 'LEGO Star Wars: L\'Empire en Vrac (Brick Master Edition)',
                'director' => 'Guy Vasilovich',
                'actors' => 'A.J. LoCascio, John DiMaggio',
                'category' => 'Collector LEGO',
                'description' => 'Pack spécial contenant un petit set LEGO exclusif à construire.',
                'price' => 99.99,
                'image' => 'https://images.unsplash.com/photo-1546776310-eef45dd6d336?w=800',
            ],

            // 10. Star Wars: Young Jedi Adventures
            [
                'title' => 'Star Wars: Les Aventures des Jeunes Jedi',
                'director' => 'Elliot M. Bour',
                'actors' => 'Jamaal Avery Jr., Emma Berman',
                'category' => 'Animation',
                'description' => 'À l\'époque de la Haute République, des novices apprennent les voies de la Force.',
                'price' => 18.99,
                'image' => 'https://images.unsplash.com/photo-1534447677768-be436bb09401?w=800',
            ],
            [
                'title' => 'Star Wars: Jeunes Jedi (Kyber Crystal Edition)',
                'director' => 'Elliot M. Bour',
                'actors' => 'Jamaal Avery Jr., Emma Berman',
                'category' => 'Collector Animation',
                'description' => 'Coffret luxe incluant un cristal Kyber interactif qui s\'illumine.',
                'price' => 139.99,
                'image' => 'https://images.unsplash.com/photo-1534447677768-be436bb09401?w=800',
            ],
        ];

        foreach ($movies as $movie) {
            Movie::create($movie);
        }
    }
}
