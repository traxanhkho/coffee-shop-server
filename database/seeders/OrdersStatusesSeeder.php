<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdersStatusesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('orders_statuses')->insert([
            [
                'order_id' => 1 , 
                'status_id' => 1 ,
            ],
        [
                'order_id' => 2 , 
                'status_id' => 2,
            ],
            [
                'order_id' => 3 , 
                'status_id' => 2,
            ],
            [
                'order_id' => 4 , 
                'status_id' => 2,
            ],
            [
                'order_id' => 5 , 
                'status_id' => 2,
            ],
            [
                'order_id' => 6 , 
                'status_id' => 2,
            ],
            
        ]);
    }
}
