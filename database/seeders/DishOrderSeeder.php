<?php

// namespace Database\Seeders;

// use App\Models\Dish;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
// use Illuminate\Database\Seeder;

// class DishOrderSeeder extends Seeder
// {
//     /**
//      * Run the database seeds.
//      */
//     public function run(): void
//     {
        
//         $DishOrderAssociations = [
//             [
//                 'dish_id' => 1, 
//                 'order_id' => 1, 
//                 'quantity' => 2,
//                 'price' => 12.50, 
//             ],
//             [
//                 'dish_id' => 2, 
//                 'order_id' => 2, 
//                 'quantity' => 1,
//                 'price' => 18.99, 
//             ],
//             [
//                 'dish_id' => 3, 
//                 'order_id' => 3, 
//                 'quantity' => 3,
//                 'price' => 9.95, 
//             ],
//             [
//                 'dish_id' => 4, 
//                 'order_id' => 4, 
//                 'quantity' => 1,
//                 'price' => 25.00, 
//             ],
//             [
//                 'dish_id' => 5, 
//                 'order_id' => 50, 
//                 'quantity' => 4,
//                 'price' => 7.75, 
//             ],
//         ];

//         // Associa i pianni agli ordini
//         foreach ($DishOrderAssociations as $association) {
//             $dish = Dish::find($association['dish_id']);
//             $dish->orders()->attach($association['order_id']);
//         }

//     }
// }
