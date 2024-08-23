<?php

namespace Database\Seeders;

use App\Models\Dish;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DishSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dishes = [
            [
                "name" => "Pizza Margherita",
                "img" => "https://placeholder.co/250x150/placeholder.png", // URL immagine fittizia
                "price" => 10.00,
                "description" => "La classica pizza con pomodoro, mozzarella e basilico fresco.",
                "ingredients" => "Pomodoro, mozzarella, basilico, olio extravergine d'oliva, sale, pepe",
                "is_visible" => true,
                "restaurant_id" => 1
            ],
            [
                "name" => "Spaghetti Carbonara",
                "img" => "https://placeholder.co/250x150/placeholder.png", // URL immagine fittizia
                "price" => 12.00,
                "description" => "Un primo piatto tipico romano a base di guanciale, uova, pecorino romano e pepe nero.",
                "ingredients" => "Guanciale, uova, pecorino romano, pepe nero, spaghetti",
                "is_visible" => true,
                "restaurant_id" => 2

            ],
            [
                "name" => "Lasagna al ragù",
                "img" => "https://placeholder.co/250x150/placeholder.png", // URL immagine fittizia
                "price" => 15.00,
                "description" => "Un piatto ricco e saporito a base di pasta sfoglia, ragù di carne, besciamella e Parmigiano Reggiano.",
                "ingredients" => "Ragu di carne macinata, besciamella, Parmigiano Reggiano, pasta sfoglia, pomodoro, cipolla, sedano, carota",
                "is_visible" => true,
                "restaurant_id" => 3

            ],
            [
                "name" => "Bistecca alla Fiorentina",
                "img" => "https://placeholder.co/250x150/placeholder.png", // URL immagine fittizia
                "price" => 25.00,
                "description" => "Un taglio pregiato di carne di manzo cotto alla brace, tipico della Toscana.",
                "ingredients" => "Bistecca di manzo Chianina, sale grosso, pepe nero, olio extravergine d'oliva",
                "is_visible" => true,
                "restaurant_id" => 4

            ],
            [
                "name" => "Tiramisù",
                "img" => "https://placeholder.co/250x150/placeholder.png", // URL immagine fittizia
                "price" => 8.00,
                "description" => "Un dolce classico italiano a base di savoiardi, caffè, mascarpone, cacao amaro e uova.",
                "ingredients" => "Savoiardi, caffè, mascarpone, uova, zucchero, cacao amaro",
                "is_visible" => true,
                "restaurant_id" => 5

            ]
        
        ];

        foreach($dishes as $dish){

             $newDish = new Dish();
             $newDish->name = $dish['name'];
             $newDish->img = $dish['img'];
             $newDish->price = $dish['price'];
             $newDish->description = $dish['description'];
             $newDish->ingredients = $dish['ingredients'];
             $newDish->is_visible = $dish['is_visible'];
             $newDish->restaurant_id = $dish['restaurant_id'];

             $newDish->save();
        }

    }
}
