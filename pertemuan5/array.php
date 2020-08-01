<?php 
// elemen pada array boleh memiliki tipe data yang berbeda

// cara lama array
$hari = array("Senin", "Selasa", "Rabu");

// cara baru array
$bulan = ["Januari", "Februari", "Maret"];
$arr1 = [123, "tulisan", false];

// Menampilkan array 
// nampil value dan jumlah string
// var_dump($hari); 
// echo "<br>";
// print_r($bulan);
// echo "<br>";

// Menampilkan 1 elemen pada array
// echo $arr1[0];
// echo "<br>";
// echo $bulan[1];

// Menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "Kamis";
$hari[] = "Jum'at";
echo "<br>";
var_dump($hari);
echo "<br>";
print_r($hari);

?>