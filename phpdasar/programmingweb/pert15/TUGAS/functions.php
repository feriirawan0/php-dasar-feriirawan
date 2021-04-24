<?php 
// Koneksi
$conn = mysqli_connect("localhost", "root", "", "db_tugas");
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
    global $conn; // mencari nilai conn
    $kode = htmlspecialchars($data['kode']);
    $jmlbeli = htmlspecialchars($data['jmlbeli']);
    $kirim = htmlspecialchars($data['kirim']);
    $jrkkirim = htmlspecialchars($data['jrkkirim']);
    $debit = htmlspecialchars($data['debit']);

    // kode bunga
    $kd1 = "MW001";
    $kd2 = "ML002";
    $kd3 = "AG003";

    // nama bunga
    $mawar = "MAWAR";
    $melati = "MELATI";
    $anggrek = "ANGGREK";

    // harga bunga
    $hrgmawar = 10000;
    $hrgmelati = 8000;
    $hrganggrek = 12000;


    // menentukan biaya kirim
    if ($jrkkirim >= 0 && $jrkkirim < 5) {
        $bayar = 0;
    } elseif ($jrkkirim > 5 && $jrkkirim <= 15) {
        $bayar = 30000;
    } elseif ($jrkkirim > 15) {
        $bayar = 50000;
    }else {
        $bayar = 0;
    }
    // biaya kirim
    $biayakirim = $bayar;

    // jumlah harga
    $jmlharga1 = $hrgmawar * $jmlbeli + $biayakirim;
    $jmlharga2 = $hrgmelati * $jmlbeli + $biayakirim;
    $jmlharga3 = $hrganggrek * $jmlbeli + $biayakirim;

    
    // menentukan diskon
    if ($debit == "BNI"  ) {
        $diskon = 0.05;
        $jumlahdiskon1 = $diskon  * $jmlharga1;
        $jumlahdiskon2 = $diskon  * $jmlharga2;
        $jumlahdiskon3 = $diskon  * $jmlharga3;
    }elseif ($debit == "BCA"){
        $diskon = "";
        $jumlahdiskon1 = $jmlharga1;
        $jumlahdiskon2 = $jmlharga2;
        $jumlahdiskon3 = $jmlharga3;
    } else {
        $diskon= '';
    }
    
    // total bayar
    $t_bayar1 = $jumlahdiskon1;
    $t_bayar2 = $jumlahdiskon2;
    $t_bayar3 = $jumlahdiskon3;
    // var_dump($t_bayar3);
    
    if($kode == $kd1){
        $query = "INSERT INTO tb_bunga VALUES 
        ('', '$kd1', '$mawar', '$hrgmawar', '$jmlbeli', '$kirim', '$jrkkirim', '$debit', '$biayakirim', '$t_bayar1')";
    }else if($kode == $kd2){
        $query = "INSERT INTO tb_bunga VALUES 
        ('', '$kd2', '$melati', '$hrgmelati', '$jmlbeli', '$kirim', '$jrkkirim', '$debit', '$biayakirim', '$t_bayar2')";
    }else if($kode == $kd3){
        $query = "INSERT INTO tb_bunga VALUES 
        ('', '$kd3', '$anggrek', '$hrganggrek', '$jmlbeli', '$kirim', '$jrkkirim', '$debit', '$biayakirim', '$t_bayar3')";
    }
    else{
        echo "kosong";
    }
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}


function hapus ($id) {
    global $conn; //mencari nilai dilur fungsi
    mysqli_query($conn, "DELETE FROM tb_bunga WHERE id = $id");

    return mysqli_affected_rows($conn);
}


function cari($keyword){ //pencariian 
    $query = "SELECT * FROM tb_bunga
                WHERE
                kode LIKE '%$keyword%' OR
                nmbunga LIKE '%$keyword%' OR
                harga LIKE '%$keyword%' OR
                pembayaran LIKE '%$keyword%' OR
                jmlbeli LIKE '%$keyword%'
    ";
    return query($query);
}

function edit($data){
    // ambil data dari tiap elemen
    $id = $data["id"];
    global $conn; // mencari nilai conn
    $kode = htmlspecialchars($data['kode']);
    $jmlbeli = htmlspecialchars($data['jmlbeli']);
    $kirim = htmlspecialchars($data['kirim']);
    $jrkkirim = htmlspecialchars($data['jrkkirim']);
    $debit = htmlspecialchars($data['debit']);

    // kode bunga
    $kd1 = "MW001";
    $kd2 = "ML002";
    $kd3 = "AG003";

    // nama bunga
    $mawar = "MAWAR";
    $melati = "MELATI";
    $anggrek = "ANGGREK";

    // harga bunga
    $hrgmawar = 10000;
    $hrgmelati = 8000;
    $hrganggrek = 12000;


    // menentukan biaya kirim
    if ($jrkkirim >= 0 && $jrkkirim < 5) {
        $bayar = 0;
    } elseif ($jrkkirim > 5 && $jrkkirim <= 15) {
        $bayar = 30000;
    } elseif ($jrkkirim > 15) {
        $bayar = 50000;
    }else {
        $bayar = 0;
    }
    // biaya kirim
    $biayakirim = $bayar;

    // jumlah harga
    $jmlharga1 = $hrgmawar * $jmlbeli + $biayakirim;
    $jmlharga2 = $hrgmelati * $jmlbeli + $biayakirim;
    $jmlharga3 = $hrganggrek * $jmlbeli + $biayakirim;

    
    // menentukan diskon
    if ($debit == "BNI"  ) {
        $diskon = 0.05;
        $jumlahdiskon1 = $diskon  * $jmlharga1;
        $jumlahdiskon2 = $diskon  * $jmlharga2;
        $jumlahdiskon3 = $diskon  * $jmlharga3;
    }elseif ($debit == "BCA"){
        $diskon = "";
        $jumlahdiskon1 = $jmlharga1;
        $jumlahdiskon2 = $jmlharga2;
        $jumlahdiskon3 = $jmlharga3;
    } else {
        $diskon= '';
    }
    
    // total bayar
    $t_bayar1 = $jumlahdiskon1;
    $t_bayar2 = $jumlahdiskon2;
    $t_bayar3 = $jumlahdiskon3;
    // var_dump($t_bayar3);
    
    if($kode == $kd1){
        $query = "UPDATE tb_bunga SET
                kode = '$kd1', 
                nmbunga = '$mawar', 
                harga = '$hrgmawar', 
                jmlbeli = '$jmlbeli', 
                kirim = '$kirim', 
                jarak = '$jrkkirim', 
                pembayaran = '$debit', 
                byakirim = '$biayakirim', 
                tharga = '$t_bayar1'
                WHERE id = $id
                ";
    }else if($kode == $kd2){
        $query = "UPDATE tb_bunga SET
                kode = '$kd2', 
                nmbunga = '$melati', 
                harga = '$hrgmelati', 
                jmlbeli = '$jmlbeli', 
                kirim = '$kirim', 
                jarak = '$jrkkirim', 
                pembayaran = '$debit', 
                byakirim = '$biayakirim', 
                tharga = '$t_bayar2'
                WHERE id = $id
                ";
    }else if($kode == $kd3){
        $query = "UPDATE tb_bunga SET
                kode = '$kd3', 
                nmbunga = '$anggrek', 
                harga = '$hrganggrek', 
                jmlbeli = '$jmlbeli', 
                kirim = '$kirim', 
                jarak = '$jrkkirim', 
                pembayaran = '$debit', 
                byakirim = '$biayakirim', 
                tharga = '$t_bayar3'
                WHERE id = $id
        kode = '$kd3', '$anggrek', '$hrganggrek', '$jmlbeli', '$kirim', '$jrkkirim', '$debit', '$biayakirim', '$t_bayar3'";
    }
    else{
        echo "kosong";
    }
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

?>