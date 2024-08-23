<?php

namespace Database\Seeders;

use App\Models\Restaurant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $restaurants = [
            [
                'name' => 'Sample Restaurant 1',
                'img' => 'path/to/image1.jpg',
                'description' => 'descrizione 1',
                'address' => '123 Main Street, Casarano, Italy',
                'vat' => 'IT12345678901', 
                'phone_number' => '+39 333 123 4567',
                'user_id' => 1,
            ],
            [
                'name' => 'Sample Restaurant 2',
                'img' => 'path/to/image2.jpg', 
                'description' => 'descrizione 2',
                'address' => '456 Via Roma, Casarano, Italy',
                'vat' => 'IT98765432100', 
                'phone_number' => '+39 348 765 4321',
                'user_id' => 2,
            ],
            [
                'name' => 'Sample Restaurant 3',
                'img' => 'path/to/image3.jpg', 
                'description' => 'descrizione 3',
                'address' => '789 Via Cavour, Casarano, Italy',
                'vat' => 'IT01234567892', 
                'phone_number' => '+39 320 987 6543',
                'user_id' => 3,
            ],
            [
                'name' => 'Sample Restaurant 4',
                'img' => 'path/to/image4.jpg', 
                'description' => 'descrizione 4',
                'address' => '1011 Corso Vittorio Emanuele, Casarano, Italy',
                'vat' => 'IT23456789012', 
                'phone_number' => '+39 392 012 3456',
                'user_id' => 4,
            ],
            [
                'name' => 'Sample Restaurant 5',
                'img' => 'path/to/image5.jpg', 
                'description' => 'descrizione 5',
                'address' => '1213 Via Dante, Casarano, Italy',
                'vat' => 'IT34567890123', 
                'phone_number' => '+39 366 543 2109',
                'user_id' => 5,
            ],
        ];

        foreach($restaurants as $restaurant) {

            $newRestaurant = new Restaurant();

            $newRestaurant->name = $restaurant['name'];
            $newRestaurant->img = $restaurant['img'];
            $newRestaurant->description = $restaurant['description'];
            $newRestaurant->address = $restaurant['address'];
            $newRestaurant->vat = $restaurant['vat'];
            $newRestaurant->phone_number = $restaurant['phone_number'];
            $newRestaurant->user_id = $restaurant['user_id'];

            $newRestaurant->save();

        }
    }
}
