<?php 
session_start();

if( !isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
}

require 'functions.php'; 

// pegination
// konfigurisi
$jumlahDataPerHalaman = 2;
// jumlah halama = total data / data perhalaman
$jumlahData = count(query("SELECT * FROM mahasiswa"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
//operator ternari
$halamanAktif =  ( isset ($_GET["halaman"]) ) ? $_GET["halaman"] : 1;
// jika halaman = 2, awalData = 3
$awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;


$mahasiswa = query("SELECT * FROM mahasiswa LIMIT $awalData, $jumlahDataPerHalaman"); //menggunkan LIMIT 1,2

// tombol cari di tekan
if( isset($_POST["cari"]) ){
    $mahasiswa = cari($_POST["keyword"]);
}

?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>

<a href="logout.php">Logout</a>

    <h1>Daftar Mahasiswa</h1>

    <a href="tambah.php">Tambah Data Mahasiswa</a>
    <br><br>

    <form action="" method="post">

        <input type="text" name="keyword" size="35" autofocus 
        placeholder="Masukan Keyword Pencarian" autocomplete="off">
        <button type="submit" name="cari">Cari</button>
    
    </form>
    <br><br>
    <!-- navigasi penegartion -->
    <?php if( $halamanAktif > 1) :?>
    <a href="?halaman=<?= $halamanAktif -  1; ?>">&laquo;</a>
    <?php endif; ?>
<!-- mundur -->


    <?php for($i = 1; $i <= $jumlahHalaman; $i++) :?>
        <?php if( $i == $halamanAktif) :?>
        <a href="?halaman=<?= $i; ?>" style="font-weight: bold; color: red;"><?= $i; ?></a>
        <?php else : ?>
            <a href="?halaman=<?= $i; ?>"><?= $i; ?></a> 
        <?php endif; ?>
    <?php endfor; ?>

<!-- maju  -->
<?php if( $halamanAktif < $jumlahHalaman) :?>
    <a href="?halaman=<?= $halamanAktif +  1; ?>">&raquo;</a>
    <?php endif; ?>


<br>
    <br>
    <table border="1" cellpadding="10" cellspacing="0" >

        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach( $mahasiswa as $row) : ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td>
                <a href="ubah.php?id=<?= $row["id"]; ?> ">Ubah</a> |
                <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');"
                >Hapus</a>
            </td>
            <td><img src="img/<?= $row["gambar"]; ?>"  width="70"></td>
            <td><?= $row["nim"]; ?></td>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["email"]; ?></td>
            <td><?= $row["jurusan"]; ?></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>

    </table>
    
</body>
</html>