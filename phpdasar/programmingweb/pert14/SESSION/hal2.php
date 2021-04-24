<?php
session_start();
include "cek.php";
echo "<h1>Ini halaman kedua</h1>";
echo "<p>Anda login sebagai "."<span>".$_SESSION['namauser']."</span>"."</p>";
echo "<p>Berikut ini menu navigasi Anda</p>";
echo "<p><a href='hal1.php'>Menu 1</a> <a href='hal2.php'>Menu 2</a> <a href='hal3.php'>Menu 3</a></p>";

?>