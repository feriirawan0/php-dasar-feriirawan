<?php
error_reporting(0); 
@$bil1 = $_POST['bil1'];
@$bil2 = $_POST['bil2'];
@$bil3 = $_POST['bil3'];

$hasil =" ";

for ($i=$bil1; $i<=$bil2; $i++) { 
    if($ii = $i % $bil3 == 0) 
    {
        $hasil.=$i." ";
        // var_dump($i);
    }
}

echo "<div style='width:500px;margin:15em auto 0 auto;background-color:
#ccc3f5;padding:20px'>";
echo "<h1>Hasil Program :</h1>";
echo "Deret: ".$hasil."<br><br>";
echo "Jumlah Data: ".strlen($i)."<br>"; 
echo "<br><a style='background-color:red;padding:5px;text-decoration:none;' 
href='http://localhost:8080/phpdasar/webprogramming/pert4/tugas4.php'>Ulangi</a>";
echo "</div>";
