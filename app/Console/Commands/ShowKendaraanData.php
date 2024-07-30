<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Kendaraan;
use App\Models\Mobil;
use App\Models\Motor;

class ShowKendaraanData extends Command
{
    protected $signature = 'kendaraan:show';
    protected $description = 'Display 3 rows of data from Kendaraan, Mobil, and Motor models in JSON format';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        // Fetch 3 rows of data from each model
        $kendaraan = Kendaraan::limit(3)->get();
        $mobil = Mobil::limit(3)->get();
        $motor = Motor::limit(3)->get();

        // Prepare data for output
        $data = [
            'kendaraan' => $kendaraan,
            'mobil' => $mobil,
            'motor' => $motor,
        ];

        // Output data in JSON format
        $this->info(json_encode($data, JSON_PRETTY_PRINT));
    }
}
