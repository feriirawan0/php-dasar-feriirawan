<?php 
require 'functions.php';
$rundata = query("SELECT * FROM `tb_berita`, `tb_kategori` WHERE `tb_berita`.`id_kategori`=`tb_kategori`.`id_kategori` ORDER BY tgl_publish DESC"); 

// tombol cari ditekna
if( isset($_POST["cari"]) ){
    $rundata = cari($_POST["keyword"]);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Tugas 13 | Feri Irawan </title>
</head>
<body>
<div class="card-body" >
    <h1>Daftar Berita</h1>
    <hr>
    <td>
        <a href="t_kategori.php" class="btn btn-primary">Tambah Kategori</a>
    </td>
    <td>
        <a href="t_berita.php" class="btn btn-primary">Tambah Berita</a>
    </td>
    <br><br>
    <form action="" method="post">
        <input type="text" name="keyword" size="35" autofocus 
        placeholder="Masukan Keyword Pencarian" autocomplete="off">
        <button type="submit" name="cari">Cari</button>
    </form>
    <br><br>
    <table  width="100%" border="1" cellpadding="10" cellspacing="0" >

        <tr align="center">
            <th>No.</th>
            <th>Aksi</th>
            <th>Nama Kategori</th>
            <th>Judul Berita</th>
            <th>Isi Berita</th>
            <th>Penulis</th>
            <th>Tanggal Publish</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach( $rundata as $row) : ?>
        <tr>
            <td align="center"><?php echo $i; ?></td>
            <td align="center">
            <a href="edit.php?id_berita=<?= $row['id_berita']; ?>">Edit |</a>
            <a href="hapus.php?id_berita=<?= $row['id_berita']; ?>" 
            onclick="return confirm('yakin?');">Hapus</a>
            </td>
            <td align="center"><?= $row["nama_kategori"]; ?></td>
            <td align="center"><?= $row["jdl_berita"]; ?></td>
            <td align="center"><?= $row["isi_berita"]; ?></td>
            <td align="center"><?= $row["penulis"]; ?></td> 
            <td align="center"><?= $row["tgl_publish"]; ?></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>
    </div> 
</body>
</html>