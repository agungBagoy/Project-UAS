<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Mobil;
class mobilController extends Controller
{
    public function createMobil()
    {
    Mobil::create([
        'no_plat' => 'N34234',
        'merk' => 'jkhjkh',
        'harga' => 200.000,
        'luggage' => 1,
        'Doors' => 2,
        'Passenger' => 4,
        'deskripsi' => 'Apa aja',
        'status' => 'tidak tersedia',
        'gambar' => '.jpeg',
    ]);

    Mobil::create([
        'no_plat' => 'N 1232 BKT',
        'merk' => '',
        'harga' => 500.000,
        'deskripsi' => 'Baru',
        'status' => 'Tersedia',
        'gambar' => '.jpg',
    ]);
    return response()->json(['message' => 'Mobil records created successfully']);

}
}
