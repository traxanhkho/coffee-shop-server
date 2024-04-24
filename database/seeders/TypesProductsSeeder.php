<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypesProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('types_products')->insert([
            [
                'product_id' => 1,
                'type_id' => 1,
            ],
            [
                'product_id' => 2,
                'type_id' => 1,
            ],
            [
                'product_id' => 3,
                'type_id' => 1,
            ],
            [
                'product_id' => 4,
                'type_id' => 2,
            ],
            [
                'product_id' => 5,
                'type_id' => 2,
            ],
            [
                'product_id' => 6,
                'type_id' => 2,
            ],
            [
                'product_id' => 7,
                'type_id' => 3,
            ],
            [
                'product_id' => 8,
                'type_id' => 3,
            ],
            [
                'product_id' => 9,
                'type_id' => 3,
            ],
            [
                'product_id' => 10,
                'type_id' => 4,
            ],
            [
                'product_id' => 11,
                'type_id' => 4,
            ],
            [
                'product_id' => 12,
                'type_id' => 4,
            ],
            [
                'product_id' => 13,
                'type_id' => 3,
            ],
            [
                'product_id' => 14,
                'type_id' => 3,
            ],
            [
                'product_id' => 15,
                'type_id' => 3,
            ],
            
        ]);
    }
}
