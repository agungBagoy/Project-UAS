<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'alamat' => 'Bandung indonesia',
            'phone' => '0819988445',
            'email' => 'sewamobil@gmail.com',
            'footer_description' => 'sewa mobil terpercaya',
            'tentang_perusahaan' => 'membantu anda menyewa mobil impian',
            'sejarah_perusahaan' => 'Berdiri sejak tahun penjajahan lol',
            'facebook' => 'https://www.facebook.com/',
            'instagram' => 'https://www.instagram.com/',
            'linkedin' => 'https://www.linkedin.com/',
            'twitter' => 'https://www.twitter.com/',
        ]);
    }
}
