<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $fake_products = [
            [
                "user_id" => 1,
                "name" => "espresso",
                "description" =>
                "The Espresso is where it all begins. Its rich aroma is the heartbeat of all our coffees. We craft one simple shot of our intense roast for the most elegant of drinks.",
                "created_at" => now(),
                "price" => 10000,
            ],
            [
                "user_id" => 1,
                "name" => "cappuccino",
                "description" =>
                "A special treat made out of intense Espresso, frothy milk and decadent chocolate dusting. Enjoy it hot or ice cold.",
                "created_at" => now(),
                "price" => 20000,
            ],
            [
                "user_id" => 1,
                "name" => "latte",
                "description" =>
                "The perfect combination of our aromatic Espresso and creamy milk. This duo is ideal for everyone who loves their drink hot in winter and cold in summer.",
                "created_at" => now(),
                "price" => 21500,
            ],
            [
                "user_id" => 1,
                "name" => "Mint Choc Chip Frostino & Cream",
                "description" =>
                "A refreshing indulgent treat, combining mint and chocolate in a Frostino, topped with cream and finished with a drizzle of chocolate sauce.",

                "created_at" => now(),
                "price" => 20000,
            ],
            [
                "user_id" => 1,
                "name" => "Salted Caramel & Cream Frostino",
                "description" =>
                "A sweet, fluffy drink with rich salted caramel, finished with whipped cream and a crunchy topping. Can be made with or without coffee.",
                "created_at" => now(),
                "price" => 50000,
            ],
            [
                "user_id" => 1,
                "name" => "Strawberry & Cream Frostino",
                "description" =>
                "An indulgent blended ice drink, made from strawberry sauce, milk and ice and finished with fresh cream.",

                "created_at" => now(),
                "price" => 65000,
            ],
            [
                "user_id" => 1,
                "name" => "Brown Toast",
                "description" =>
                "Two slices of toasted malted bloomer bread packed with sunflower seeds, linseeds and oats. Offered with butter and marmalade.",

                "created_at" => now(),
                "price" => 72000,
            ],
            [
                "user_id" => 1,
                "name" => "White Toast",
                "description" =>
                "Two slices of white bloomer bread, toasted to perfection. Offered with butter and marmalade.",

                "created_at" => now(),
                "price" => 27000,
            ],
            [
                "user_id" => 1,
                "name" => "Fruited Teacake",
                "description" =>
                "A sweet dough with an abundance of sultanas and raisins. Offered with butter.",

                "created_at" => now(),
                "price" => 30000,
            ],
            [
                "user_id" => 1,
                "name" => "Chocolate Twist",
                "description" => "All butter pastry twist with dark chocolate.",

                "created_at" => now(),
                "price" => 50000,
            ],
            [
                "user_id" => 1,
                "name" => "Caramel Pecan Danish",
                "description" =>
                "Danish Pastry with a caramel creme filling and pecan pieces on top.",

                "created_at" => now(),
                "price" => 80000,
            ],
            [
                "user_id" => 1,
                "name" => "Pain aux Raisins",
                "description" => "All butter pastry swirled with raisins.",

                "created_at" => now(),
                "price" => 80000,
            ],
            [
                "user_id" => 1,
                "name" => "Ham and Cheese Toastie",
                "description" => "All butter pastry twist with dark chocolate.",

                "created_at" => now(),
                "price" => 29000,
            ],
            [
                "user_id" => 1,
                "name" => "Tuna Melt Panini",
                "description" =>
                "Danish Pastry with a caramel creme filling and pecan pieces on top.",
                "created_at" => now(),
                "price" => 32000,
            ],
            [
                "user_id" => 1,
                "name" => "Vegan Bac'n Bap",
                "description" => "All butter pastry swirled with raisins.",
                "created_at" => now(),
                "price" => 40000,
            ],
        ];

        DB::table((new Product)->getTable())->insert($fake_products);
    }
}
