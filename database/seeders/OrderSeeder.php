<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        DB::table('orders')->insert([
            [
                'id' => 1,
                'user_id' => 1,
                'address' => 'nha trang - khanh hoa',
                'number_phone' => '367219606',
                "created_at" => Faker::create()->dateTimeBetween('-1 year', 'now'),
            ],
            [
                'id' => 2,
                'user_id' => 1,
                'address' => 'nha trang - khanh hoa',
                'number_phone' => '367219606',
                "created_at" => Faker::create()->dateTimeBetween('-1 year', 'now'),
            ],
            [
                'id' => 3,
                'user_id' => 1,
                'address' => 'nha trang - khanh hoa',
                'number_phone' => '367219606',
                "created_at" => Faker::create()->dateTimeBetween('-1 year', 'now'),
            ],
            [
                'id' => 4,
                'user_id' => 1,
                'address' => 'nha trang - khanh hoa',
                'number_phone' => '367219606',
                "created_at" => Faker::create()->dateTimeBetween('-1 year', 'now'),
            ],
            [
                'id' => 5,
                'user_id' => 1,
                'address' => 'nha trang - khanh hoa',
                'number_phone' => '367219606',
                "created_at" => Faker::create()->dateTimeBetween('-1 year', 'now'),
            ],
            [
                'id' => 6,
                'user_id' => 1,
                'address' => 'nha trang - khanh hoa',
                'number_phone' => '367219606',
                "created_at" => Faker::create()->dateTimeBetween('-1 year', 'now'),
            ],
        ]);
    }
}
