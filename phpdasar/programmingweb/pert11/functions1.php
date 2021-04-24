<?php 
//KONEKSI DB
$conn = mysqli_connect("localhost", "root", "","lat_dbase");

function query($query){
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while($row = mysqli_fetch_assoc($result)){
                $rows[] = $row;
        }
        return $rows;
}

function tambah($data){
            // ambil data dari tiap elemen
                global $conn;

                $nim = htmlspecialchars($data['nim']);
                $nama   = htmlspecialchars($data['nama_mhs']);
                $matkul = htmlspecialchars($data['matakuliah']);
                $jk = htmlspecialchars($data['jmlhadir']);
                $jp  = htmlspecialchars($data['jp']);
                $tugas  = htmlspecialchars($data['tugas']);
                $uts    = htmlspecialchars($data['uts']);
                $uas    = htmlspecialchars($data['uas']);
                
                // menghitung nilai 
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

        //insert data
        $query = "INSERT INTO tblnilai VALUES 
        ('$nim', '$nama', '$matkul', '$nilai_uts', '$nilai_uas', '$nilai_tugas', '$absen', '$nilai_akhir', '$grade', '$ktr');";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
}







?>