<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('items')->insert([
            [
                'id' => 1,
                'product_id' => 1,
                'quantity' => 4 ,
            ],
            [
                'id' => 2,
                'product_id' => 2,
                'quantity' => 1 ,
            ],
            [
                'id' => 3,
                'product_id' => 4,
                'quantity' => 4 ,
            ],
            [
                'id' => 4,
                'product_id' => 1,
                'quantity' => 9,
            ],
        ]);
    }
}
