<?php

// Kelas Mahasiswa
class Mahasiswa
{
    // Variabel Private
    private $nim = "";
    private $nama = "";
    private $jeniskelamin = "";
    private $prodi = "";
    private $semester = "";

    // Fungsi Constructor
    public function __construct($nim = "", $nama = "", $jeniskelamin = "", $prodi = "", $semester = "")
    {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->jeniskelamin = $jeniskelamin;
        $this->prodi = $prodi;
        $this->semester = $semester;
    }

    // Public function setter dan getter
    public function setNim($nim)
    {
        $this->nim = $nim;
    }

    public function getNim($nim)
    {
        return $this->nim;
    }

    public function setNama($nama)
    {
        $this->nama = $nama;
    }

    public function getNama($nama)
    {
        return $this->nama;
    }

    public function setJenisKelamin($jeniskelamin)
    {
        $this->jeniskelamin = $jeniskelamin;
    }

    public function getJenisKelamin($jeniskelamin)
    {
        return $this->jeniskelamin;
    }

    public function setProdi($prodi)
    {
        $this->prodi = $prodi;
    }

    public function getProdi($prodi)
    {
        return $this->prodi;
    }

    public function setSemester($semester)
    {
        $this->semester = $semester;
    }

    public function getSemester($semester)
    {
        return $this->semester;
    }

    // Fungsi untuk print
    public function tulis(){
        echo "NIM           : ". $this->nim ."<br/>";
        echo "Nama          : ". $this->nama ."<br/>";
        echo "Jenis Kelamin : ". $this->jeniskelamin ."<br/>";
        echo "Program Studi : ". $this->prodi ."<br/>";
        echo "Semester      : ". $this->semester ."<br/>";  
    }
}

?>