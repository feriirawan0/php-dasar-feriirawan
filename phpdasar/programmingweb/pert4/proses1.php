<?php
@$bil1 = $_POST['bil1'];
@$bil2 = $_POST['bil2'];
@$hasil = "";
    for ($i=$bil1;$i<=$bil2;$i++)
        {
        $hasil.=$i.",";
    }
echo "<div style='width:500px;margin:15em auto 0 auto;background-color:
#ccc3f5;padding:20px'>";
echo "<h1>Hasil Program :</h1>";
echo $hasil."<br><br>";
echo "<a style='background-color:red;padding:5px;text-decoration:none;' 
href='http://localhost:8080/phpdasar/webprogramming/pert4/tugas1.php'>Ulangi</a>";
echo "</div>";
?>