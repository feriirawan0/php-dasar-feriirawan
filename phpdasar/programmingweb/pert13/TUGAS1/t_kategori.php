<?php 
// error_reporting("E_ALL & ~E_NOTICE");
require 'functions.php';
        // query/ambil data 
        $tb_kategori = query("SELECT * FROM tb_kategori");
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
                <th>Tambah Nama Kategori</th>
            </tr>
        </thead>
        <tbody >
        <?php 
            if( isset($_POST['submit'])){
                    // cek kondisi
                    if ( t_kategori($_POST) > 0 ) {
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
            <tr>
            <td>Nama Kategori</td>
                <td><input type="text" name="kategori" id="kategori" required></td>
            </tr>            
            <tr>
            <td><button type="submit" name="submit" class="btn btn-primary mr-2 submit">Proses</button>
            <button type="reset" name="reset" class="btn btn-warning">Reset</button></td>
            </tr>
        </form>
        </tbody>
    </table>
</div>
</body>
</html>