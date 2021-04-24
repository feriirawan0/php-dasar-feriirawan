<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Tugas Pertemuan 9 | Feri Irawan</title>
</head>

<body>
    <div class="container m-auto " style="width: 600px;">
        <table class="table mt-5" >
            <thead>
                <tr>
                    <th>Input Data</th>
                    <th style="width: 30%;"></th>
                    <th style="width: 30%;"></th>
                    <th style="width: 30%;"></th>
                </tr>
            </thead>
            <tbody>
<?php 
error_reporting(0);
    if(isset($_POST['submit'])){
        $nmbarang = $_POST['nmbarang'];
        $kategori = $_POST['kategori'];
        $lokasi = $_POST['lokasi'];
        $masapakai = $_POST['masapakai'];
        $jmlstok = $_POST['jmlstok'];
        
        $hargast = 150000;
        $npersediaan = $jmlstok * $hargast;

        $kdbrg = "KM-RM-1";
        
        $jmlpersedian = $npersediaan;

        $tgl1    = date('l, d-m-Y'); // menentukan tanggal awal
        $tgl2    = date('Y-m-d', strtotime( + $masapakai .'days', strtotime($tgl1))); // penjumlahan tanggal 
    }
?>



                <form action="" method="POST">
                    <tr>
                        <td>Nama Barang</td>
                        <td>
                            <input type="text" class="form-control form-control-sm"autocomplete="off" name="nmbarang" id="nmbarang" value="BOBA BOBA">
                        </td>
                    </tr>
                    <tr>
                        <td>Kategori</td>
                            <td><label class="radio-inline"><input type="radio" autocomplete="off" name="kategori" id="kategori" value="Makanan" checked> Makanan</label></td>
                            <td><label class="radio-inline"><input type="radio" autocomplete="off" name="kategori" id="kategori" value="Minuman"> Minuman</label></td>
                            <td><label class="radio-inline"><input type="radio" autocomplete="off" name="kategori" id="kategori" value="Pangan"> Pangan</label></td>                    
                    </tr>
                    <tr>
                        <td>Lokasi Penyimpanan</td>
                        <td>
                        <select name="lokasi" class="form-control form-control-sm"  >
                            <option value="Lokasi 1">Lokasi 1</option>
                            <option value="Lokasi 2">Lokasi 2</option>
                            <option value="Lokasi 3">Lokasi 3</option>
                        </select><td></td><td></td>
                        </td>
                    </tr>
                    <tr>
                        <td>Masa Pakai</td>
                        <td>
                            <input type="text" value="" class="form-control form-control-sm" autocomplete="off" name="masapakai" id="masapakai"> <td>Hari</td><td></td>
                        </td>
                    </tr>
                    <tr>
                        <td>Jumlah Stok</td>
                        <td>
                            <input type="text" value="" class= form-control form-control-sm" autocomplete="off" name="jmlstok" id="jmlstok" required> <td></td><td></td>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <button type="submit" name="submit" class="btn btn-primary mr-2 submit">Submit</button>
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
                <th width="120">Nama Barang</th>
                <th width="100">Kategori</th>
                <th width="100">Stock</th>
                <th width="100">Harga Satuan</th>
                <th width="100">Masa Pakai</th>
                <th width="100">Lokasi Simpan</th>
                <th width="100">Nilai Persedian</th>
                <th width="100">Kode Barang</th>
                <th width="100">Tanggal Expired</th>
        </tr>
        <tr>
                <td align="center"><?= $nmbarang; ?></td>
                <td><?= $kategori; ?></td>
                <td><?= $jmlstok; ?></td>
                <td align="center"><?= number_format($hargast); ?></td>
                <td align="center"><?= $masapakai; ?> Hari</td>
                <td align="center"><?= $lokasi; ?></td>
                <td align="center"><?= number_format($npersediaan); ?></td>
                <td align="center"><?= $kdbrg; ?></td>
                <td align="center"><?= $tgl2; ?></td>
        </tr>
        </table>
        
        <?php 
            echo "Jumlah Persedian : ".number_format($jmlpersedian);
        ?>
        </div>
        <br>
        <br>


        <!-- simpan barang -->
        <?php 
        extract($_REQUEST);
        $file = fopen("simpan.txt", "a");
        fwrite($file, "Nama Barang   |      Kategori   |     Stock    |    HrgSatuan    |    Masa Pakai   |    Lokasi Simpan    |    Nilai Persediaan    |    Kode Barang    | Tanggal Expired  "."\n");


        fwrite($file, "      $nmbarang".    "        $kategori". "          $jmlstok". "            $hargast". "               $masapakai  ".  "               $lokasi". "               $npersediaan". "               $kdbrg". "          $tgl2".
                "\n"
            );
        fwrite($file, " Jumlah Persediaan : ".number_format($jmlpersedian)."\n");
		
    ?>








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