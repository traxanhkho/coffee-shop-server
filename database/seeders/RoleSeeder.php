<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            [
                'id' => 1,
                'name' => 'Admin',
                'slug' => 'admin'
            ],
            [
                'id' => 2,
                'name' => 'Manager',
                'slug' => 'manager'
            ],
            [
                'id' => 3,
                'name' => 'Guest',
                'slug' => 'guest'
            ],
        ]);
    }
}
