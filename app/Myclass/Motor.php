<?php

namespace App\MyClass;

class Motor extends Kendaraan
{
    private $jenis;

    public function __construct($merk, $tahun, $jenis)
    {
        parent::__construct($merk, $tahun);
        $this->jenis = $jenis;
    }

    public function getJenis()
    {
        return $this->jenis;
    }

    public function setJenis($jenis)
    {
        $this->jenis = $jenis;
    }

    public function greeting()
    {
        return parent::greeting() . ", Jenis: " . $this->jenis;
    }
}
