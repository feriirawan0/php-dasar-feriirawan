<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Nilai Mahasiswa | Feri Irawan</title>
        <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap"); 
    * {
        position: relative;
        font-size: 14px;
        color: #666;
        }

        body,
        input {
        font-family: "Poppins", sans-serif;
        }
        h1 {
        margin: 0 0 20px;
        font-weight: 400;
        color: #1c87c9;
        }
        form {
        padding: 25px;
        margin: 25px;
        box-shadow: 0 2px 5px #f5f5f5; 
        background: #f5f5f5; 
        }
        button {
        padding: 10px;
        border: none;
        background: #1c87c9; 
        font-size: 16px;
        font-weight: 400;
        color: #fff;
        }
        button:hover {
        background: #2371a0;
        }  
</style>  
<body>
<form>

<?php
@$nama   = $_POST['nama'];
@$matkul = $_POST['matkul'];
@$nim = $_POST['nim'];
@$jk = $_POST['jk'];
@$jp  = $_POST['jp'];
@$absen  = $_POST['absen'];
@$tugas  = $_POST['tugas'];
@$uts    = $_POST['uts'];
@$uas    = $_POST['uas'];
//menghitung nilai yang telah kita input
$absen= ($jk/$jp)*100;
$nilai_absen = $absen * 0.1;
$nilai_tugas = $tugas * 0.2;
$nilai_uts   = $uts * 0.3;
$nilai_uas   = $uas * 0.4;
//penjumlahan dari nilai-nilai yang sudah diinput
$nilai_akhir = $nilai_absen + $nilai_tugas + $nilai_uts + $nilai_uas;
                //menampilkan grade berdasarkan hasil nilai akhir
                if ($nilai_akhir>=80) { 
                        $grade = "A";
                        $ktr = "LULUS";
                } elseif ($nilai_akhir>=70) { 
                        $grade = "B"; 
                        $ktr = "LULUS";
                } elseif ($nilai_akhir>=60) {
                        $grade = "C"; 
                        $ktr = "LULUS";
                } elseif ($nilai_akhir>=50) {
                        $grade = "D";
                        $ktr = "TIDAK LULUS"; 
                } else { 
                        $grade = "E";
                        $ktr = "TIDAK LULUS";
                } 
                echo"
        <h1>DATA NILAI AKHIR DAN GRADE MAHASISWA</h1>
        Nama Mahasiswa : $nama <br>
        NIM Mahasiswa : $nim<br>
        Mata Kuliah : $matkul <br>
        Jumlah Kehadiran : <b>$jk </b><br>
        Nilai Kehadiran : <b>$absen</b><br>
        Nilai Tugas : <b>$nilai_tugas</b><br>
        Nilai UTS : <b>$nilai_uts</b><br>
        Nilai UAS : <b>$nilai_uas</b><br>
        <h4>Nilai Akhir : $nilai_akhir</h4>
        <h4>Keterangan : $ktr<h4>
        <h4>Grade : $grade</h4>";
?>
</form>
</body>
</html>