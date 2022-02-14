<?php

// Memanggil header kelas mahasiswa
include "mahasiswa.php";

// Input data Mahasiswa 1
$mahasiswa1 = new mahasiswa();
$mahasiswa1->setNim(2000107);
$mahasiswa1->setNama("Rizal Teddyansyah");
$mahasiswa1->setJenisKelamin("Laki-Laki");
$mahasiswa1->setProdi("Ilmu Komputer");
$mahasiswa1->setSemester(4);

// Print Daftar Mahasiswa
echo "<b>Daftar Mahasiswa UPI:</b>" ."<br/>";
echo "<br>";

// Print Mahasiswa 1
echo "Mahasiswa 1:" ."<br/>";
$mahasiswa1->tulis();

echo "<br>";

// Input data Mahasiswa 2
$mahasiswa2 = new mahasiswa(2000117, "Dhiva Aulia", "Perempuan", "Tata Boga", 2);

// Print Mahasiswa 2
echo "Mahasiswa 2:" ."<br/>";
$mahasiswa2->tulis();


?>