<?php

namespace Database\Seeders;

use App\Models\Typology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $typologies = ['Italiano', 'Cinese', 'Giapponese', 'Greco', 'Indiano', 'Messicano', 'Pesce', 'Carne', 'Pizza', 'Vegana'];

        $typologies = [
            [
                'type' => 'Italiano',
                'img' => 'italiano.jpg',
            ],
            [
                'type' => 'Cinese',
                'img' => 'cinese.jpg',
            ],
            [
                'type' => 'Giapponese',
                'img' => 'giapponese.jpg',
            ],
            [
                'type' => 'Greco',
                'img' => 'greco.jpg',
            ],
            [
                'type' => 'Indiano',
                'img' => 'indiano.jpg',
            ],
            [
                'type' => 'Messicano',
                'img' => 'messicano.jpg',
            ],
            [
                'type' => 'Pesce',
                'img' => 'pesce.jpg',
            ],
            [
                'type' => 'Carne',
                'img' => 'carne.jpg',
            ],
            [
                'type' => 'Pizza',
                'img' => 'pizza.jpg',
            ],
            [
                'type' => 'Vegano',
                'img' => 'vegano.jpg',
            ]
        ];

        foreach ($typologies as $typology) {
            $newTypology = new Typology();
            $newTypology->type = $typology['type'];
            $newTypology->img = $typology['img'];
            $newTypology->save();
        }
    }

}
