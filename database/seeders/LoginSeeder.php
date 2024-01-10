<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LoginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('login')->insert([
            [
            'nama_pengguna' => 'Dwi',
            'username' => 'admin',
            'password' => Hash::make('1111'), 
            'level' => 'admin',
        ],
        [
            'nama_pengguna' => 'Agung',
            'username' => 'admin2',
            'password' => Hash::make('2222'),
            'level' => 'admin',
        ],
        [
            'nama_pengguna' => 'Krisna Waskita',
            'username' => 'demo',
            'password' => Hash::make('1234'), 
            'level' => 'pengguna',
        ],
    ]);
    }
}
