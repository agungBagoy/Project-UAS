<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('booking')->insert([
            [
                'kode_booking' => '1576329294',
                'id_login' => 3,
                'id_mobil' => 5,
                'ktp' => '231423123',
                'nama' => 'Krisna',
                'alamat' => 'Bekasi',
                'no_tlp' => '08132312321',
                'tanggal' => '2019-12-28',
                'lama_sewa' => 2,
                'total_harga' => 400000,
                'konfirmasi_pembayaran' => 'Pembayaran di terima',
                'tgl_input' => '2019-12-14',
            ],
            [
                'kode_booking' => '1576671989',
                'id_login' => 3,
                'id_mobil' => 5,
                'ktp' => '231423',
                'nama' => 'Krisna Waskita',
                'alamat' => 'Bekasi Ujung Harapan',
                'no_tlp' => '082391273127',
                'tanggal' => '2019-12-20',
                'lama_sewa' => 2,
                'total_harga' => 400525,
                'konfirmasi_pembayaran' => 'Pembayaran di terima',
                'tgl_input' => '2019-12-18',
            ],
            [
                'kode_booking' => '1642998828',
                'id_login' => 3,
                'id_mobil' => 5,
                'ktp' => '1283821832813',
                'nama' => 'Krisna',
                'alamat' => 'Bekasi',
                'no_tlp' => '089618173609',
                'tanggal' => '2022-01-26',
                'lama_sewa' => 4,
                'total_harga' => 800743,
                'konfirmasi_pembayaran' => 'Pembayaran di terima',
                'tgl_input' => '2022-01-24',
            ],
        ]);
    }
}
