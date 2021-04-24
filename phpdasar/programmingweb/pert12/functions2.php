<?php 
//KONEKSI DB
$conn = mysqli_connect("localhost", "root", "","db_tugas");

function query($query){
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while($row = mysqli_fetch_assoc($result)){
                $rows[] = $row;
        }
        return $rows;
}
function ubah($data){
    // ambil data dari tiap elemen
        global $conn;

        $kode = htmlspecialchars($data['kode']);
        $jmlbeli = htmlspecialchars($data['jmlbeli']);
        $kirim = htmlspecialchars($data['kirim']);
        $jrkkirim = htmlspecialchars($data['jrkkirim']);
        $debit = htmlspecialchars($data['debit']);


        if ($jrkkirim <= 5) {
                $biaya = 0;
        } elseif($jrkkirim <= 15){
                $biaya = 30000;
        } elseif($jrkkirim > 15){
                $biaya = 50000;
        } else {
                $biaya = '';
        }

        if ($debit == "BNI"  ) {
                $diskon = 5;
        }elseif ($debit == "BCA"){
                $diskon = 0;
        } else {
                $diskon = 0;
        }

        $jumlah = $row["harga"] * $jmlbeli + $biaya + ($diskon / 100) ;






//insert data
$query = "UPDATE tb_bunga SET
        kode = '$kode',
        nmbarang='',
        harga='', 
        jmlbeli='$jmlbeli', 
        kirim='$kirim', 
        jarak='$jrkkirim', 
        pembayaran='$debit', 
        byakirim='$biaya', 
        tharga='$jumlah'
        WHERE kode = $kode
";


mysqli_query($conn, $query);

return mysqli_affected_rows($conn);
}