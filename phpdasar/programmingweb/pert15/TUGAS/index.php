<?php 

require 'functions.php';
        $tb_bunga = query("SELECT * FROM tb_bunga");
        $count = count($tb_bunga);
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
                    <th>Form Input </th>
                    <th style="width: 30%;"></th>
                    <th style="width: 30%;"></th>
                    <th style="width: 30%;"></th>
                </tr>
            </thead>
            <tbody>
                <?php 
                // error_reporting(0);
                // cek rememeber
                if(isset($_POST['remember'])){
                // buat cookies
                setcookie('submit', 'true', time()+60);
                }

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
                <form action="" method="POST" enctype="multipart/form-data">
                    <tr>
                        <td>Kode</td>
                        <td>
                            <input type="text" class="form-control form-control-sm"autocomplete="off" name="kode" id="kode" value="MW001">
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
                            <input type="text" value="" class= "form-control form-control-sm" autocomplete="off" name="jrkkirim" id="jrkkirim" required><td></td><td></td>
                        </td>
                    </tr>
                    <tr>
                        <td>Pembayaran</td>
                        <td>
                        <select name="debit" class="form-control form-control-sm">
                            <option size="35">--Pilih Card--</option>
                            <option value="BNI">BNI CARD</option>
                            <option value="BCA">BCA CARD</option>
                        </select><td></td><td></td>
                        </td>
                    </tr>
                    <tr>
                    <td></td>
                        <td><label for="remember">Aktifkan Cookies</label></td>
                        <td><input type="checkbox" name="remember" id="remember"></td>
                    <td></td>
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
    <?php 
        echo "<strong>Tampil Data :</strong>&nbsp&nbsp&nbsp" . $count;
    ?>
    <?php 
            // tombol cari di tekan
            if( isset($_POST["cari"]) ){
                $tb_bunga = cari($_POST["keyword"]);
            }
    ?>

    <!-- mungkin kelasahan error ada disini -->
    <form action="" method="post" enctype="multipart/form-data" align="right">
        <input type="text" name="keyword" size="35" autofocus 
            placeholder="Masukan Keyword Pencarian" autocomplete="off">
        <button type="submit" name="cari" class="btn btn-success">SEARCH</button>
    </form>

        <table width="110%"  border="2" align="center" class="table mt-2 text-center">
        <tr>
                <th width="50"><?= Strtoupper('No'); ?></th> 
                <th width="50"><?= Strtoupper('Kode'); ?></th> 
                <th width="100"><?= Strtoupper('Nama Bunga'); ?></th>
                <th width="100"><?= Strtoupper('Harga/ Tangkai'); ?></th>
                <th width="100"><?= Strtoupper('Jumlah Beli'); ?></th>
                <th width="100"><?= Strtoupper('Kirim'); ?></th>
                <th width="100"><?= Strtoupper('Jarak'); ?></th>
                <th width="100"><?= Strtoupper('Pembayaran'); ?></th>
                <th width="100"><?= Strtoupper('Biaya Kirim'); ?></th>
                <th width="100"><?= Strtoupper('Total Bayar'); ?></th>
                <th width="100"><?= Strtoupper('ACTION'); ?></th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($tb_bunga as $row): ?>
        <tr>
                <td align="center"><?php echo $i; ?></td>
                <td align="center"><?= $row["kode"]; ?></td>
                <td><?= $row["nmbunga"]; ?></td>
                <td><?= number_format($row["harga"]); ?></td>
                <td align="center"><?= $row["jmlbeli"]; ?></td>
                <td align="center"><?= $row["kirim"]; ?></td>
                <td align="center"><?= $row["jarak"]; ?> km.</td>
                <td align="center"><?= $row["pembayaran"]; ?></td>
                <td align="center"><?= number_format($row["byakirim"]); ?></td>
                <td align="center">Rp. <?= number_format($row["tharga"]); ?></td>
                <td align="center">
                <a href="edit.php?id=<?= $row['id']; ?>" class="btn btn-primary">Edit </a>
                <a href="hapus.php?id=<?= $row['id']; ?>" onclick="return confirm('yakin?');" class="btn btn-danger">Hapus</a>
                </td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
        </table>
        </div>
        <br>
        <br>

</body>

</html>