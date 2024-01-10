<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PembayaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pembayaran')->insert([
            [
                'id_pembayaran' => 3,
                'id_booking' => 1,
                'no_rekening' => 2131241,
                'nama_rekening' => 'Krisna Aldi Waskito',
                'nominal' => 400000,
                'tanggal' => '2019-12-14',
            ],
            [
                'id_pembayaran' => 4,
                'id_booking' => 2,
                'no_rekening' => 2131241,
                'nama_rekening' => 'Krisna Aldi Waskito',
                'nominal' => 400525,
                'tanggal' => '2019-12-18',
            ],
            [
                'id_pembayaran' => 5,
                'id_booking' => 3,
                'no_rekening' => 13213,
                'nama_rekening' => 'Fauzan Falah',
                'nominal' => 800743,
                'tanggal' => '2022-01-24',
            ],
        ]);
    }
}
