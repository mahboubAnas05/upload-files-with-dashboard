<?php

namespace Database\Seeders;

use App\Models\Annonce;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnnonceSeeder extends Seeder
{
    /**
     * Run the database seeds.
    */
    public function run(): void
    {
        //
        Annonce::insert([
            [
                'titre' => "Vente d'une maison R+2",
                'description' => 'une jolie maison est en vente à hay saada',
                'type' => 'Maison',
                'ville' => 'Fès',
                'superficie' => '120',
                'neuf' => 'true',
                'prix' => '1800000.00'
            ],
            [
                'titre' => "Superbe appartement",
                'description' => 'appartement moyen standing en 2ème étage est en vente',
                'type' => 'Appartement',
                'ville' => 'Meknès',
                'superficie' => '100',
                'neuf' => 'false',
                'prix' => '650000.00'
            ],
            [
                'titre' => "Terrain au centre ville",
                'description' => 'je met en vente un terrain titré à hay ATLAS',
                'type' => 'Terrain',
                'ville' => 'Fès',
                'superficie' => '220',
                'neuf' => 'true',
                'prix' => '990000.00'
            ],
            [
                'titre' => "Vente d'un appartement au center ville",
                'description' => 'Hay saada',
                'type' => 'Appartement',
                'ville' => 'Rabat',
                'superficie' => '80',
                'neuf' => 'false',
                'prix' => '1000000.00'
            ]
        ]);
    }
}
