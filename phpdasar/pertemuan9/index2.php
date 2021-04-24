<?php 
//Koneksi ke database dgn varialbe $conn / $db / $link
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// ambil data dari tebel /istilah query data nya
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

//ambil data (fetch) mahasiswa dari object $result
//mysqli_fetch_row() //mengembalikan array numerik /nilai index nya angka
//mysqli_fetch_assoc() //mengambil nilai associative
//mysqli_fetch_array()  //mengembalikan keduanya
//mysqli_fetch_object() //
//  Looping / pengulangan
// while ($mhs = mysqli_fetch_assoc($result) ){
//     var_dump($mhs);
// }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    
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
        <?php while( $row = mysqli_fetch_assoc($result)) : ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td>
                <a href="">Ubah</a> |
                <a href="">Hapus</a>
            </td>
            <td><img src="img/<?= $row["gambar"]; ?>"  width="70"></td>
            <td><?= $row["nim"]; ?></td>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["email"]; ?></td>
            <td><?= $row["jurusan"]; ?></td>
        </tr>
        <?php $i++; ?>
        <?php endwhile; ?>

    </table>
    
</body>
</html>