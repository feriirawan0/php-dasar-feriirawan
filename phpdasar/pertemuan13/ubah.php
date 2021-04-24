<?php 
//menghubungkan fungsi yang beradi diluar halaman
require 'functions.php';

//ambil data di URL GET
$id = $_GET["id"];
// var_dump($id); 

//query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];
// var_dump($mhs["nama"]);


//cek apakah tombol submit sudah ditekan atau belom
if( isset($_POST["submit"]) ) {

    // cek apakah data berhasil di ubah atau tidak
    if ( ubah($_POST) > 0 ) {
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
            document.location.href = 'index.php';
        </script>
        ";
    }    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Mahasiswa</title>
</head>
<body>

    <h1>Edit Data Mahasiswa</h1>

    <form action="" method="post" enctype="multipart/form-data">
    <!-- menentukan id mahasiswa mana yang akan di update/edit -->
    <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
    <input type="hidden" name="gambarOld" value="<?= $mhs["gambar"]; ?>">
        <ul>
            <li>
            <!-- requerid fungsi html 5 kalo kosong gakadakn jalan -->
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" required 
                value="<?= $mhs["nama"] ?>">
            </li>
            <li>
                <label for="nim">Nim : </label>
                <input type="text" name="nim" id="nim" required 
                value="<?= $mhs["nim"] ?>">
            </li>
            <li>
                <label for="email">Email : </label>
                <input type="text" name="email" id="email" required 
                value="<?= $mhs["email"] ?>">
            </li>
            <li>
                <label for="jurusan">Jurusan :</label>
                <input type="text" name="jurusan" id="jurusan" required 
                value="<?= $mhs["jurusan"] ?>">
            </li>
            <li>
                <label for="gambar">Gambar :</label> <br>
                <img src="img/<?= $mhs['gambar']; ?>" width="50"><br> 
                <input type="file" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Edit Data!</button>
            </li>
        </ul>

    
    </form>







    
</body>
</html>