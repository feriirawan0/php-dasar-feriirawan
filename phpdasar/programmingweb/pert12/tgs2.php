<?php 
// error_reporting("E_ALL & ~E_NOTICE");
require 'functions2.php';
        // query/ambil data 
        $tb_bunga = query("SELECT * FROM tb_bunga");
?>


<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Tugas Pertemuan 12| Feri Irawan</title>
</head>

<body>
    <div class="container m-auto " style="width: 600px;">
        <table class="table mt-5" >
            <thead>
                <tr>
                    <th>Form Input </th>
                    <th style="width: 30%;"></th>
                    <th style="width: 30%;"></th>
                    <th style="width: 30%;"></th>
                </tr>
            </thead>
            <tbody>


<?php 
error_reporting(0);
if( isset($_POST['submit'])){
    // cek kondisi
    if ( ubah($_POST) > 0 ) {
        echo "
        <script>
            alert('data berhasil diubah!');
        </script>
        ";
    } else {
        echo "
        <script>
            alert('data gagal diubah!');
        </script>
        ";
    }    
    
}
    
?>
                <form action="" method="POST">
                    <tr>
                        <td>Kode</td>
                        <td>
                            <input type="text" class="form-control form-control-sm"autocomplete="off" name="kode" id="kode" value="">
                        </td>
                    </tr>
                    <tr>
                        <td>Jumlah Beli</td>
                        <td>
                            <input type="text" value="" class="form-control form-control-sm" autocomplete="off" name="jmlbeli" id="jmlbeli"> <td></td><td></td>
                        </td>
                    </tr>
                    <tr>
                        <td>Kirim</td>
                            <td><label class="form-check-label"><input type="checkbox" autocomplete="off" name="kirim" id="kirim" value="KIRIM" checked></label></td>
                            <td></td>
                            <td></td>                    
                    </tr>
                    <tr>
                        <td>Jarak Kirim</td>
                        <td>
                            <input type="text" value="" class= "form-control form-control-sm" autocomplete="off" name="jrkkirim" id="jrkkirim" required> <td></td><td></td>
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
                            <button type="reset" name="reset" class="btn btn-warning">Reset</button><td></td>
                        </td>
                    </tr>
                </form>
            </tbody>
        </table>
    </div>
    <div class="container m-auto" >
    <hr style="height:2px;border-width:0;color:gray;background-color:gray">
        <table width="110%"  border="2" align="center" class="table mt-5 text-center">
        <tr>
                <th width="120"><?= Strtoupper('Kode'); ?></th> 
                <th width="100"><?= Strtoupper('Nama Bunga'); ?></th>
                <th width="100"><?= Strtoupper('Harga/Tangkai'); ?></th>
                <th width="100"><?= Strtoupper('Jumlah Beli'); ?></th>
                <th width="100"><?= Strtoupper('Kirim'); ?></th>
                <th width="100"><?= Strtoupper('Jarak'); ?></th>
                <th width="100"><?= Strtoupper('Pembayaran'); ?></th>
                <th width="100"><?= Strtoupper('Biaya Kirim'); ?></th>
                <th width="100"><?= Strtoupper('Total Bayar'); ?></th>
        </tr>

        <?php foreach ($tb_bunga as $row): ?>
        <tr>
                <td align="center"><?= $row["kode"]; ?></td>
                <td><?= $row["nmbunga"]; ?></td>
                <td><?= number_format($row["harga"]); ?></td>
                <td align="center"><?= $row["jmlbeli"]; ?></td>
                <td align="center"><?= $row["kirim"]; ?></td>
                <td align="center"><?= $row["jarak"]; ?></td>
                <td align="center"><?= $row["pembayaran"]; ?></td>
                <td align="center"><?= $row["byakirim"]; ?></td>
                <td align="center"><?= $row["tharga"]; ?></td>
        </tr>
        <?php endforeach; ?>
        </table>
        </div>
        <br>
        <br>

    <!-- Simpan data ke database -->









    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>