<?php 
session_start();
$keranjang = isset($_SESSION['keranjang']) ? $_SESSION['keranjang'] : array();

if(isset($_GET['tambah'])){
    $id_barang  = $_GET['id_barang'];
    $barang     = $_GET['barang'];
    $harga      = $_GET['harga'];

    $keranjang[$id_barang] = array(
                                "nama_barang" => $barang,
                                "harga" => $harga
    );
    $_SESSION['keranjang'] = $keranjang;

} else if(isset($_GET['hapus'])){
    $id_barang = $_GET['id_barang'];
    $keranjang = $_SESSION['keranjang'];

    unset($keranjang[$id_barang]);

    $_SESSION['keranjang'] = $keranjang;
} else if (isset($_GET['hapus_semua'])) {
    unset($_SESSION['keranjang']);
}

// jenis barang 
$nmbarang1 = "Roti";
$nmbarang2 = "Terigu";
$nmbarang3 = "Susu";

// harga barang 
$hargabrg1 = 2000;
$hargabrg2 = 5000;
$hargabrg3 = 2500;

// jumlah barang 
$qty1 = 2;
$qty2 = 5;
$qty3 = 10;

// jumlah harga barang 
$jmlharga1 = $hargabrg1 * $qty1;
$jmlharga2 = $hargabrg2 * $qty2;
$jmlharga3 = $hargabrg3 * $qty3;

// total harga barang 
$total = $jmlharga1 + $jmlharga2 + $jmlharga3;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Belanja</title>
</head>
<body align="center">
<h1>Daftar Produk</h1>
<table cellpadding="10" align="center">
    <thead>
    <tr>
        <th width="0"><?= Strtoupper("Jenis Barang") ?></th>
        <th><?= Strtoupper("QTY") ?></th>
        <th><?= Strtoupper("Harga") ?></th>
        <th><?= Strtoupper("Jumlah Harga") ?></th>
        <th><?= Strtoupper("Aksi") ?></th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td><?= $nmbarang1; ?></td>
        <td><?= $qty1; ?></td>
        <td><?= $hargabrg1; ?></td>
        <td align="center">Rp. <?= number_format($jmlharga1); ?></td>
        <td>
        <a href="index.php?tambah&id_barang=1&barang=Roti&harga=2000">Tambah Keranjang</a> |
        <a href="index.php?hapus&id_barang=1&barang=Roti&harga=2000">Hapus Keranjang</a>
        </td>
    </tr>
    <tr>
        <td><?= $nmbarang2; ?></td>
        <td><?= $qty2; ?></td>
        <td><?= $hargabrg2; ?></td>
        <td align="center">Rp. <?= number_format($jmlharga2); ?></td>
        <td>
        <a href="index.php?tambah&id_barang=2&barang=Terigu&harga=5000">Tambah Keranjang</a> |
        <a href="index.php?hapus&id_barang=2&barang=Terigu&harga=5000">Hapus Keranjang</a>
        </td>
    </tr>
    <tr>
        <td><?= $nmbarang3; ?></td>
        <td><?= $qty3; ?></td>
        <td><?= $hargabrg3; ?></td>
        <td align="center">Rp. <?= number_format($jmlharga3); ?></td>
        <td>
        <a href="index.php?tambah&id_barang=3&barang=Susu&harga=2500">Tambah Keranjang</a> |
        <a href="index.php?hapus&id_barang=3&barang=Susu&harga=2500">Hapus Keranjang</a>
        </td>
    </tr>
    </tbody>
</table>
<br>
    <?php echo "<strong>Total Harga : </strong>". number_format($total) ?>
</body>
<br>
<a href="index.php?hapus_semua">Hapus semua daftar keranjang</a>
<br>
<br>

<?php 

$total_keranjang = count($keranjang);
echo "Total Keranjang belanja : " . $total_keranjang; 
    if($total_keranjang > 0){
        // echo "<pre>";

        // print_r($keranjang);

        // echo "</pre>";
    } else{
        echo " Keranjang belanja kosong";
    }
?>
</html>