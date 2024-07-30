<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\MyClass\Mobil;
use App\MyClass\Motor;

class BookLogsController extends Controller
{
    public function logGreeting()
    {
        $Mobil = [
            ['otomotif' => 'Mobil ERTIGA', 'kendaraan_bermotor' => 'Azzhari'],
            ['otomotif' => 'Mobil AVANZA', 'kendaraan_bermotor' => 'Azzhari'],
            ['otomotif' => 'Mobil MOBILIO', 'kendaraan_bermotor' => 'Azzhari']
        ];

        $Motor = [
            ['otomotif' => 'Harry Potter', 'kendaraan_bermotor' => 'Azzhari'],
            ['otomotif' => 'Lord Of The Rings 1', 'kendaraan_bermotor' => 'Azzhari'],
            ['otomotif' => 'Lord Of The Rings 2', 'kendaraan_bermotor' => 'Azzhari']
        ];

        $RowDataMobil =[];
        foreach ($Mobil as $Kendaraan) {
            $Mobil = new Mobil();
            $Mobil->setotomotif($Kendaraan['otomotif']);
            $Mobil->setkendaraan_bermotor($Kendaraan['kendaraan_bermotor']);
            Log::info($Mobil->greeting());
            $RowDataMobil[]= [
                'otomotif'=>$Mobil->getotomotif(),
                'kendaraan_bermotor'=>$Mobil->getkendaraan_bermotor(),
                'greeting'=>$Mobil->greeting()

            ];
        }

        $RowDataMotor= [];
        foreach ($Motor as $Kendaraan) {
            $Motor = new Motor();
            $Motor->setotomotif($Kendaraan['otomotif']);
            $Motor->setkendaraan_bermotor($Kendaraan['kendaraan_bermotor']);
            Log::info($Motor->greeting());
            $RowDataNovel[]= [
                'otomotif'=>$Motor->getotomotif(),
                'kendaraan_bermotor'=>$Motor->getkendaraan_bermotor(),
                'greeting'=>$Motor->greeting()

            ];
        }

        return response()->json([
            'Mobil'=>$RowDataMobil,
            'Motor'=>$RowDataMotor,
    ]);
    }
}
