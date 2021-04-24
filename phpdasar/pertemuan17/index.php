<?php 
session_start();

if( !isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
}

require 'functions.php'; //memanggil fungsi menggunkan require
$mahasiswa = query("SELECT * FROM mahasiswa"); //menampilkan semua data yang didatabase ke index

// tombol cari di tekan
if( isset($_POST["cari"]) ){
    $mahasiswa = cari($_POST["keyword"]);
}

?>  <!---ORDER BY id ASC/DESC untuk mengurutkan data dari besar ke kecil atau sebaliknya-->
<!-- WHERE nim 'feri irawan' , memanggil sesuai yang dipilih-->

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