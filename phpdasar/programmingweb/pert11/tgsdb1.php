<?php 
error_reporting("E_ALL & ~E_NOTICE");
require 'functions1.php';
        // query/ambil data 
        $tblnilai = query("SELECT * FROM tblnilai");
?>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tugas Pertemuan 11 | Feri Irawan</title>
        <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap"); 
    * {
        position: relative;
        font-size: 14px;
        color: #666;
        }

        body,
        input {
        font-family: "Poppins", sans-serif;
        }
        h1 {
        margin: 0 0 20px;
        font-weight: 400;
        color: #1c87c9;
        }
        form {
        padding: 25px;
        margin: 25px;
        box-shadow: 0 2px 5px #f5f5f5; 
        background: #f5f5f5; 
        }
        button {
        padding: 10px;
        border: none;
        background: #1c87c9; 
        font-size: 16px;
        font-weight: 400;
        color: #fff;
        }
        button:hover {
        background: #2371a0;
        }  
</style>  
</head>
<body>


<?php 
if( isset($_POST['submit'])){
        // cek kondisi
        if ( tambah($_POST) > 0 ) {
                echo "
                <script>
                        alert('data berhasil ditambahkan!');
                </script>
                ";
        } else {
                echo "
                <script>
                        alert('data gagal ditambahkan!');
                </script>
                ";
        }
}

?>

<form action="" method="POST">
        <h1>PROGRAM MENAMPILKAN NILAI AKHIR DAN GRADE MAHASISWA</h1>
        <div class="info">
        NIM Mahasiswa :<br>
        <input type="text" name="nim" placeholder="" size="9" maxlength="9" required><br>
        Nama Mahasiswa : <br>
        <input type="text" name="nama_mhs" placeholder="" maxlength="30" required><br>
        Mata Kuliah : <br>
        <input type="text" name="matakuliah" placeholder="" maxlength="25" ><br>
        Jumlah Kehadiran : <br>
        <input type="text" name="jmlhadir" placeholder="" size="25" maxlength="25"><br>
        Jumlah Pertemuan : <br>
        <input type="text" name="jp" placeholder="" size="25" maxlength="25"><br>
        Nilai UTS : <br>
        <input type="text" name="uts" placeholder="" maxlength="5"><br>
        Nilai UAS : <br>
        <input type="text" name="uas" placeholder="" required><br>
        Nilai Tugas : <br>
        <input type="text" name="tugas" placeholder="" maxlength="5"><br>
	<br>
	<button type="submit" name="submit" value="submit">Proses!</button>
	<button type="reset" name="reset" value="reset">Reset!</button>
        </div>
<div>
        <hr>
        <h2>Data Nilai Mahasiswa</h2>
        <table width="100%" bgcolor="grey" cellspacing="1">
        <tr bgcolor="white">
                <th width="100">NIM</th>
                <th>Nama Mahasiswa</th>
                <th>Mata Kuliah</th>
                <th width="100">Nilai Kehadiran</th>
                <th width="100">Nilai UTS</th>
                <th width="100">Nilai UAS</th>
                <th width="100">Nilai Tugas</th>
                <th width="100">Nilai Akhir</th>
                <th width="100">Grade</th>
                <th width="100">Keterangan</th>
        </tr>

<?php foreach ($tblnilai as $row): ?>
        <tr bgcolor="white">
                <td align="center"><?= $row["nim"]; ?></td>
                <td><?= $row["nama_mhs"]; ?></td>
                <td><?= $row["matakuliah"]; ?></td>
                <td align="center"><?= $row["jmlhadir"]; ?></td>
                <td align="center"><?= $row["uts"]; ?></td>
                <td align="center"><?= $row["uas"]; ?></td>
                <td align="center"><?= $row["tugas"]; ?></td>
                <td align="center"><?= $row["nilaiakhir"]; ?></td>
                <td align="center"><?= $row["grade"]; ?></td>
                <td align="center"><?= $row["keterangan"]; ?></td>
        </tr>
<?php endforeach; ?>
        </table>
</div>
</form>
</body>
</html>