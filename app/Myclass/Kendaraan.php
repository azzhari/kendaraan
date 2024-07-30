<?php

namespace App\MyClass;

class Kendaraan
{
    protected $merk;
    protected $tahun;

    public function __construct($merk, $tahun)
    {
        $this->merk = $merk;
        $this->tahun = $tahun;
    }

    public function getMerk()
    {
        return $this->merk;
    }

    public function setMerk($merk)
    {
        $this->merk = $merk;
    }

    public function getTahun()
    {
        return $this->tahun;
    }

    public function setTahun($tahun)
    {
        $this->tahun = $tahun;
    }

    public function greeting()
    {
        return "Merk: " . $this->merk . ", Tahun: " . $this->tahun;
    }
}
