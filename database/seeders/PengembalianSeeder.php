<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PengembalianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pengembalian')->insert([
            [
                'kode_booking' => 'ABC123',
                'tanggal' => '2022-01-31',
                'denda' => 10000,
            ],
        ]);
    }
}
