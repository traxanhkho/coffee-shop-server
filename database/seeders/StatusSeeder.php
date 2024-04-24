<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('statuses')->insert([
            [
                'id' => 1,
                'name' => 'cancelled',
            ],
            [
                'id' => 2,
                'name' => 'pedding',
            ],
            [
                'id' => 3,
                'name' => 'processing',
            ],
            [
                'id' => 4,
                'name' => 'completed',
            ],
        ]);
    }
}
