<?php 
// error_reporting("E_ALL & ~E_NOTICE");
date_default_timezone_set("Asia/Jakarta");
require 'functions.php';

$id = $_GET["id_berita"];
// var_dump($id);

$tb_berita = query("SELECT * FROM tb_berita WHERE id_berita = $id")[0]; 
// var_dump($tb_kategori["jdl_berita"]);
$data1 = query("SELECT * FROM tb_kategori");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Tugas 13 | Feri Irawan</title>
</head>
<body>
<div class="container m-auto " style="width: 600px;">
    <table class="mt-5">
        <thead>
            <tr>
                <th>Tambah Daftar Berita</th>
            </tr>
        </thead>
        <tbody >
        <?php 
            //cek apakah tombol submit sudah ditekan atau belom
            if( isset($_POST["submit"]) ) {
                // cek apakah data berhasil di ubah atau tidak
                if ( edit($_POST) > 0 ) {
                    echo "
                    <script>
                        alert('data berhasil diubah!');
                        document.location.href = 'index.php';
                    </script>
                    ";
                } else {
                    echo "
                    <script>
                        alert('data gagal diubah!');
                        // document.location.href = 'index.php';
                    </script>
                    ";
                }    
            }
?>
        <form action="" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id_berita" value="<?= $tb_berita["id_berita"]; ?>">
            <tr>
            <td>Kategori</td>
            <td>
				<select name="id_kategori">
                <?php 
                    echo "<option value='".$tb_berita['id_kategori']."'>".$tb_berita['id_kategori']."</option>";
                ?>
				</select>
			</td>
            <tr> 
            <td>Judul Berita</td>
                <td><input type="text" name="jdl_berita" id="jdl_berita" 
                value="<?= $tb_berita["jdl_berita"]; ?>" required></td>
            </tr>            
            <tr>
            <td>Isi Berita</td>
                <td><textarea name="isi_berita" id="isi_berita" value="" cols="23" rows="" required ><?= $tb_berita["isi_berita"]; ?></textarea></td>
            </tr>    
            <td>Penulis</td>
                <td><input type="text" name="penulis" id="penulis" value="<?= $tb_berita["penulis"]; ?>" required></td>
            </tr>            
            <tr>
            
            <td><br>
            <button type="submit" name="submit" class="btn btn-primary mr-2 submit">Proses</button>
            <button type="reset" name="reset" class="btn btn-warning">Reset</button>
            </td>
            </tr>
        </form>
        </tbody>
    </table>
</div>
</body>
</html>