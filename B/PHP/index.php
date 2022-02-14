<?php

include "DataTim.php";

// Setter
$T_satu = new DataTim();
$T_satu->setTim("Persib Bandung");
$T_satu->setNegara("Indonesia");
$T_satu->setTahun(1933);
$T_satu->setPemain("Teja Paku Alam");

// Constructor Input
$T_dua = new DataTim("FC Bayern Munchen", "Jerman", 1900, "Robert Lewandowski");

// Print Tim Pertama
echo "====================================" ."<br/>";
echo "Tim Pertama    :" ."<br/>";
echo "====================================" ."<br/>";
$T_satu->printData();

// Print New Line
echo "<br/>";

// Print Tim Kedua
echo "====================================" ."<br/>";
echo "Tim Kedua      :" ."<br/>";
echo "====================================" ."<br/>";
$T_dua->printData();

?>