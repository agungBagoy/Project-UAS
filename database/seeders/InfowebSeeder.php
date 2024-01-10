<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InfowebSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('infoweb')->insert([
            'nama_rental' => 'Roda Gembira',
            'telp' => '081298669897',
            'alamat' => 'Ujung Harapan Kota Bandung',
            'email' => 'dwicode@gmail.com',
            'no_rek' => 'BRI A/N Dwi Puspa 123123213123',
            'updated_at' => '2022-01-24 04:57:29',
        ]);
    }
}
