<?php 
//array
//adalah variabel yang dapat memiliki banyak nilai
//element pada array boleh memiliki tipe data yang berbeda
//pasangan antara key dan value
//key-nya adalah index, yang dimulai dari nol 0

// membuat array
//cara lama
$hari = array("senin", "selasa", "rabu");
//cara baru
$bulan = ["Januiari", "Febuari", "Maret"];
$arr1 = [123, "tulisan", false];


// menapilkan array
// var_dump()/print_r()
// var_dump($hari);
// echo "<br>";
// print_r($bulan);
// echo "<br>";


//menampilkan 1 element pada array
// echo $arr1[0];
// echo "<br>";
// echo $bulan [1];


// menmbahkan elemen baru pada array
var_dump($hari);
$hari[] = "Kamis";
$hari[] = "Jum'at";
echo "<br>";
var_dump($hari);




?>