<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        DB::table('types')->insert([
            [
                'id' => 1,
                'name' => 'coffee',
            ],
            [
                'id' => 2,
                'name' => 'frostino',
            ],
            [
                'id' => 3,
                'name' => 'food',
            ],
            [
                'id' => 4,
                'name' => 'pastries',
            ],
        ]);
    }
}
