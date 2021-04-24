<?php
@$bil1 = $_POST['bil1'];
@$bil2 = $_POST['bil2'];
@$kali = $_POST['kali'];
@$hasil_perkalian = 0;
@$hasil_penjumlahan = 0;
echo "<div style='width:500px;margin:10em auto 0 auto;background-color:
#ccc3f5;padding:20px'>";
echo "<h1>Hasil Program :</h1><br>";
while($bil1 <= $bil2) {
    echo $bil1 . " x " . $kali." = ";
    echo $hasil_perkalian = $bil1 * $kali."<br/>";
    $bil1++;
    @$hasil_penjumlahan = $hasil_penjumlahan + $hasil_perkalian;
}
    @$hasil.= "========+<br/>".$hasil_penjumlahan;
echo $hasil."<br><br>";
echo "<a style='background-color:red;padding:5px;text-decoration:none;' 
href='http://localhost:8080/phpdasar/webprogramming/pert4/tugas2.php'>Ulangi</a>";
echo "</div>";
?>
