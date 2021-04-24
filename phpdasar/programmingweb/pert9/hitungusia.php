<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program Menghitung Usia</title>
</head>
<body>
<form action="" method="post">
<table>
    <tr>
        <td>Masukkan Tanggal Lahir </td> 
        <td><input type="date" name="tanggal_lahir"><br></td>
        <td><input type="submit" name="submit" value="HitungUsia"/></td>
        <td><input type="reset" name="reset" value="reset"/></td>
    </tr>
</table>
</form>
    
</body>
</html>




<?php
    // menggunakan function
    function hitung_umur(string $tanggal_lahir){
        $tanggal_lahir = new DateTime($_POST['tanggal_lahir']);
        // tanggal hari ini 
        $today = new DateTime("today");
        // cek tanggal lahir dan hari ini
        if ($tanggal_lahir > $today) { 
            // output 
            exit("0 tahun 0 bulan 0 hari");
        }
        // tahun 
        $y = $today->diff($tanggal_lahir)->y;
        // bulan
        $m = $today->diff($tanggal_lahir)->m;
        // hari
        $d = $today->diff($tanggal_lahir)->d;
        return $y." tahun ".$m." bulan ".$d." hari";
    }



if($_SERVER['REQUEST_METHOD'] == "POST"){
    if($_POST['submit'] == "HitungUsia")
        {
            $hasil = hitung_umur('tanggal_lahir');
            echo "Usia Anda Adalah : $hasil";
        }
    }
?>
</body>
</html>