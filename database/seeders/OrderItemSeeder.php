<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('orders_items')->insert([
            [
                'order_id' => 1,
                'item_id' => 4,
            ],
            [
                'order_id' => 2,
                'item_id' => 3,
            ],
            [
                'order_id' => 1,
                'item_id' => 2,
            ],
            [
                'order_id' => 2,
                'item_id' => 1,
            ],
            [
                'order_id' => 3,
                'item_id' => 2,
            ],
            [
                'order_id' => 4,
                'item_id' => 1,
            ],
            [
                'order_id' => 5,
                'item_id' => 2,
            ],
            [
                'order_id' => 6,
                'item_id' => 1,
            ],
        ]);
    }
}
