<?php

// Kelas DataTim
class DataTim
{
    private $tim = "";
    private $negara = "";
    private $tahun = 0;
    private $pemain = "";

    // Constructor
    public function __construct($tim = "", $negara = "", $tahun = 0, $pemain = "")
    {
        $this->tim = $tim;
        $this->negara = $negara;
        $this->tahun = $tahun;
        $this->pemain = $pemain;
    }

    // Setter
    public function setTim($tim)
    {
        $this->tim = $tim;
    }

    public function setNegara($negara)
    {
        $this->negara = $negara;
    }

    public function setTahun($tahun)
    {
        $this->tahun = $tahun;
    }

    public function setPemain($pemain)
    {
        $this->pemain = $pemain;
    }

    // Getter
    public function getTim()
    {
        return $this->tim;
    }

    public function getNegara()
    {
        return $this->negara;
    }

    public function getTahun()
    {
        return $this->tahun;
    }

    public function getPemain()
    {
        return $this->pemain;
    }

    // Print Data
    public function printData()
    {
        echo "Tim           : ". $this->getTim(). "<br/>";
        echo "Negara        : ". $this->getNegara(). "<br/>";
        echo "Tahun Berdiri : ". $this->getTahun(). "<br/>";
        echo "Pemain        : ". $this->getPemain(). "<br/>";
    }
}

?>