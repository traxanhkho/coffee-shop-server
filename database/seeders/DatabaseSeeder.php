<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            ProductSeeder::class,
            TypeSeeder::class,
            UserSeeder::class,
            ImageSeeder::class,
            TypesProductsSeeder::class,
            RoleSeeder::class,
            UsersRolesSeeder::class,
            StatusSeeder::class,
            ItemSeeder::class,
            OrderSeeder::class,
            OrderItemSeeder::class,
            OrdersStatusesSeeder::class,
        ]);
    }
}
