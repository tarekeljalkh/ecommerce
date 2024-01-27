<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin user',
                'username' => 'adminuser',
                'email' => 'admin@admin.com',
                'role' => 'admin',
                'status' => 'active',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Vendor user',
                'username' => 'vendoruser',
                'email' => 'vendor@vendor.com',
                'role' => 'vendor',
                'status' => 'active',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'user user',
                'username' => 'useruser',
                'email' => 'user@user.com',
                'role' => 'user',
                'status' => 'active',
                'password' => bcrypt('password'),
            ],
        ]);
    }
}
