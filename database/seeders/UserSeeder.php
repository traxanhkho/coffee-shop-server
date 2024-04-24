<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'id' => 1,
                'name' => 'Dang Tien Dat',
                'email' => 'dangtiendat@gmail.com',
                'email_verified_at' => now(),
                'number_phone' => '372819233',
                'address' => 'phuoc loc - nha trang - khanh hoa',
                'password' => Hash::make('password'),
            ],
            [
                'id' => 2,
                'name' => 'Minh Tien',
                'email' => 'tien@gmail.com',
                'email_verified_at' => now(),
                'address' => '75/2 tan hai - vinh truong - nha trang',
                'number_phone' => '3839883305',
                'password' => Hash::make('password'),
            ],
            [
                'id' => 3,
                'name' => 'Guest1',
                'email' => 'guest1@gmail.com',
                'address' => '75/2 tan hai - vinh truong - nha trang',
                'number_phone' => '3839883305',
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
            ],
        ]);
    }
}
