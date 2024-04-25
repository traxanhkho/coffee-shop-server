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
                'order_id' => 1,
                'item_id' => 2,
            ],
        ]);
    }
}
