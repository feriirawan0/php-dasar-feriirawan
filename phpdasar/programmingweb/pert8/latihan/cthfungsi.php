<?php
echo strlen("Hello Tulis Kode!"); 
echo "<br>";
echo str_word_count("Hello TulisKode!");
echo "<br>";
echo strrev("Hello TulisKode!");
echo "<br>";
echo strpos("Hello TulisKode!", "TulisKode");
echo "<br>";
echo str_replace("Hello", "Selamat Datang di", "Hello TulisKode!");
echo "<br>";
$str = "Belajar PHP itu sulit";
echo str_replace("sulit","mudah", $str);
?>

<?php  
$rest = substr ("abcdef", -1);    // menghasilkan "f"
$rest = substr ("abcdef", -2);    // menghasilkan "ef"
$rest = substr ("abcdef", -3, 1); // menghasilkan "d"
var_dump($rest);
// echo"$rest";
?>

<?php 
$year = 1982;
$month = 2;
$day = 27;

// echo $tanggal akan menghasilkan "1982-02-27"
$tanggal = sprintf ("%04d-%02d-%02d", $year, $month, $day);

$email = " user@domain.com";
$domain = strstr($email,'@');
echo $domain; //akan menghasilkan "@domain.com"
$str = "Test jumlah variabel";
$pj = strlen($str); // variabel $pj bernilai 18
var_dump($pj);
?> 
