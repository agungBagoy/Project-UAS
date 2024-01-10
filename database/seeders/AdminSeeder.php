<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Dwi Puspa',
            'email' => 'admin@admin.com',
            'password' => bcrypt('123'),
            'is_admin' => true
        ]);
    }
}
