<?php

namespace App\MyClass;

class Mobil extends Kendaraan
{
    private $jumlahPintu;

    public function __construct($merk, $tahun, $jumlahPintu)
    {
        parent::__construct($merk, $tahun);
        $this->jumlahPintu = $jumlahPintu;
    }

    public function getJumlahPintu()
    {
        return $this->jumlahPintu;
    }

    public function setJumlahPintu($jumlahPintu)
    {
        $this->jumlahPintu = $jumlahPintu;
    }

    public function greeting()
    {
        return parent::greeting() . ", Jumlah Pintu: " . $this->jumlahPintu;
    }
}
