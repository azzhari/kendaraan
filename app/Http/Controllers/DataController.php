<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public function showData()
    {
        // Misalkan kita punya array untuk setiap kelas
        $kendaraan = [
            'id' => 1,
            'name' => 'Kendaraan A'
        ];

        $mobil = [
            'id' => 2,
            'name' => 'Mobil B'
        ];

        $motor = [
            'id' => 3,
            'name' => 'Motor C'
        ];

        // Mengembalikan data dalam format JSON
        return response()->json([
            'kendaraan' => $kendaraan,
            'mobil' => $mobil,
            'motor' => $motor
        ]);
    }
}
