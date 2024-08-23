<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Restaurant;
use App\Models\Typology;


class RestaurantTypologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Domani proviamo ad insierire gli Array

        //$restaurant = Restaurant::find(1); // Recupera un ristorante per ID
        
        // $restaurantTypes = ['Italiana', 'Frutti di Mare']; // Tipi da associare

        // $typeIds = Type::whereIn('label', $restaurantTypes)->pluck('id')->toArray(); // Converti in array di ID

        // $restaurant->types()->attach($typeIds);

        // Questo assocerà i tipi con etichette "Italiana" e "Frutti di Mare" al ristorante con ID 1.

        $RestaurantTypologyAssociations = [
            [
                'restaurant_id' => 1,
                'typology_id' => 1,
            ],
            [
                'restaurant_id' => 1,
                'typology_id' => 3,
            ],
            [
                'restaurant_id' => 2,
                'typology_id' => 2,
            ],
            [
                'restaurant_id' => 2,
                'typology_id' => 5,
            ],
            [
                'restaurant_id' => 3,
                'typology_id' => 6,
            ],
            [
                'restaurant_id' => 4,
                'typology_id' => 8,
            ],
            [
                'restaurant_id' => 5,
                'typology_id' => 9,
            ],
            [
                'restaurant_id' => 5,
                'typology_id' => 10,
            ],
        ];

        // Associa le tipologie ai ristoranti
        foreach ($RestaurantTypologyAssociations as $association) {
            $restaurant = Restaurant::find($association['restaurant_id']);
            $restaurant->typologies()->attach($association['typology_id']);
        }
    }
}
