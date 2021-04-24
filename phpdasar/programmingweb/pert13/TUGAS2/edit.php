<?php 

require 'functions.php';
        // ambil data di URL
        $id = $_GET["id"];
        // query data berdasarkan id
        $tb_bunga = query("SELECT * FROM tb_bunga WHERE id = $id")[0];
        // var_dump($tb_bunga['pembayaran']);

?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Tugas Pertemuan 14 | Feri Irawan</title>
</head>

<body>
    <div class="container m-auto " style="width: 600px;">
        <table class="table mt-5" >
            <thead>
                <tr>
                    <th>Form Edit </th>
                    <th style="width: 30%;"></th>
                    <th style="width: 30%;"></th>
                    <th style="width: 30%;"></th>
                </tr>
            </thead>
            <tbody>
                <?php 
                // error_reporting(0);
                if( isset($_POST['submit'])){

                    // cek kondisi
                    if ( edit($_POST) > 0 ) {
                        echo "
                        <script>
                            alert('data berhasil diedit!');
                        </script>
                        ";
                    } else {
                        echo "
                        <script>
                            alert('data gagal diedit!');
                        </script>
                        ";
                    }    
                    
                }
                    
                ?>
                <form action="" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $tb_bunga['id']; ?>">
                    <tr>
                        <td>Kode</td>
                        <td>
                            <input type="text" class="form-control form-control-sm"autocomplete="off" name="kode" id="kode" value="<?= $tb_bunga['kode']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Jumlah Beli</td>
                        <td>
                            <input type="text" value="<?= $tb_bunga['jmlbeli']; ?>" class="form-control form-control-sm" autocomplete="off" name="jmlbeli" id="jmlbeli"> <td></td><td></td>
                        </td>
                    </tr>
                    <tr>
                        <td>Kirim</td>
                            <td><label class="form-check-label">
                            <input type="checkbox" autocomplete="off" name="kirim" id="kirim" value="KIRIM" checked></label></td>
                            <td></td>
                            <td></td>                    
                    </tr>
                    <tr>
                        <td>Jarak Kirim</td>
                        <td>
                            <input type="text" value="<?= $tb_bunga['jarak']; ?>" class= "form-control form-control-sm" autocomplete="off" name="jrkkirim" id="jrkkirim" required><td></td><td></td>
                        </td>
                    </tr>
                    <tr>
                        <td>Pembayaran</td>
                        <td>
                        <select name="debit" class="form-control form-control-sm"  >
                            <option value="BNI">BNI CARD</option>
                            <option value="BCA">BCA CARD</option>
                        </select><td></td><td></td>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <button type="submit" name="submit" class="btn btn-primary mr-2 submit">Proses</button>
                            <button type="reset" name="reset" class="btn btn-warning">Reset</button>
                            <a href="index.php" class="btn btn-danger mr-2">Kembali</a>
                            <td></td>
                        </td>
                    </tr>
                </form>
            </tbody>
        </table>
    </div>
</body>
</html>