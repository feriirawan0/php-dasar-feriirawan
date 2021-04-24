<?php
// mengambil data dari test1.php
if (isset($_POST['submit'])) {
    $hargabuku =  $_POST['hargabuku'];
    $hargamouse = $_POST['hargamouse'];
    $hargaflashdisk = $_POST['hargaflashdisk'];
    $hargapulpen = $_POST['hargapulpen'];
    $qtybuku = $_POST['qtybuku'];
    $qtymouse = $_POST['qtymouse'];
    $qtyflashdisk = $_POST['qtyflashdisk'];
    $qtypulpen = $_POST['qtypulpen'];
}

// jumlah harga
$jumlahbuku = str_replace(',', '', $hargabuku) * $qtybuku;
$jumlahmouse = str_replace(',', '', $hargamouse)  * $qtymouse;
$jumlahflashdisk = str_replace(',', '', $hargaflashdisk)  * $qtyflashdisk;
$jumlahpulpen = str_replace(',', '', $hargapulpen)  * $qtypulpen;

// total harga
$totalharga = $jumlahbuku + $jumlahmouse + $jumlahmouse + $jumlahpulpen;

// penentuan diskon

if ($totalharga >= 200000 && $totalharga < 499999) {
    $diskon = 5;
} elseif ($totalharga >= 500000) {
    $diskon = 10;
} else {
    $diskon = 0;
}

// jumlah diskon
$jumlahdiskon = ($diskon / 100) * $totalharga;

// jumlah harus di bayar
$hargabayar = $totalharga - $jumlahdiskon;

?>




<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Tugas | Pertemuan 6 | Feri Irawan</title>
</head>

<body>

    <div class="container mt-3 hasil">
        <table class="table text-center">
            <thead>
                <tr>
                    <th colspan="4">Daftar Pemesanan Peralatan Kantor</th>
                </tr>
                <tr>
                    <th>Nama Peralatan</th>
                    <th>Jumlah</th>
                    <th>Harga Satuan</th>
                    <th>Jumlah Harga</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Buku</td>
                    <td><?= $qtybuku; ?></td>
                    <td><?= $hargabuku; ?></td>
                    <td><?= number_format($jumlahbuku); ?></td>
                </tr>
                <tr>
                    <td>Mouse</td>
                    <td><?= $qtymouse; ?></td>
                    <td><?= $hargamouse; ?></td>
                    <td><?= number_format($jumlahmouse); ?></td>
                </tr>
                <tr>
                    <td>FlashDisk</td>
                    <td><?= $qtyflashdisk; ?></td>
                    <td><?= $hargaflashdisk; ?></td>
                    <td><?= number_format($jumlahflashdisk); ?></td>
                </tr>
                <tr>
                    <td>Pulpen</td>
                    <td><?= $qtypulpen; ?></td>
                    <td><?= $hargapulpen; ?></td>
                    <td><?= number_format($jumlahpulpen); ?></td>
                </tr>
                <tr>
                    <th colspan="3" class="text-right">Total Harga</th>
                    <td><?= number_format($totalharga); ?></td>
                </tr>
                <tr>
                    <th colspan="3" class="text-right">Diskon <?= $diskon; ?>%</th>
                    <td><?= number_format($jumlahdiskon); ?></td>
                </tr>
                <tr>
                    <th colspan="3" class="text-right">Jumlah Harus Bayar</th>
                    <td id="uangharusdibayar"><?= number_format($hargabayar); ?></td>
                </tr>
                <tr>
                    <th colspan="3" class="text-right">Uang DiTerima</th>
                    <td class="d-flex justify-content-center">
                    <input type="text" name="uangditerima" id="uangditerima" 
                    class="form-control form-control-sm " style="width: 50%;">
                    </td>
                </tr>
                <tr>
                    <th colspan="3" class="text-right">Keterangan</th>
                    <td id="keterangan">
                        <span>Cukup / Kurang / Lebih</span>
                    </td>
                </tr>
                <tr>
                    <th colspan="3" class="text-right">Uang
                        <span id="kurang2">Kurang</span>/
                        <span id="lebih2">Lebih</span>
                    </th>
                    <td id="hasilakhir"></td>
                </tr>
            </tbody>
        </table>

    </div>
    <div class="text-center py-3">
        <a href="hasil3.txt" class="btn btn-primary">LihatHasil.txt</a>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->

    <!-- Menghitung otomatis di dalam input sesuai keterangan yang didapat -->
    <script>
        $(document).ready(function() {
            $('#uangditerima').keyup(function() {
                let uangharusdibayar = $('#uangharusdibayar').html().replace(/\,/g, '')

                if ($(this).val() == '') {
                    $('#keterangan').children('span').remove();
                    $('#keterangan').append('<span>Cukup / Kurang / Lebih</span>')
                }
                if ($(this).val() < uangharusdibayar && $(this).val() != '-') {
                    $('#keterangan').children('span').remove();
                    $('#keterangan').append('<span><del>Cukup</del> / Kurang / <del>Lebih</del></span>')
                }
                if ($(this).val() == uangharusdibayar) {
                    $('#keterangan').children('span').remove();
                    $('#keterangan').append('<span>Cukup / <del>Kurang</del> / <del>Lebih</del></span>')
                }
                if ($(this).val() > uangharusdibayar) {
                    $('#keterangan').children('span').remove();
                    $('#keterangan').append('<span><del>Cukup</del> / <del>Kurang</del> / Lebih</span>')
                }
                let hasilakhir = $(this).val() - uangharusdibayar;
                $('#hasilakhir').html(Math.abs(hasilakhir));
                })
                })
    </script>

    <!-- simpan data didalam .txt -->
    <?php 
        extract($_REQUEST);
        $file = fopen("hasil3.txt", "a");
        fwrite($file, "Peralatan   |      QTY    |    HrgSatuan    |    Jumlah  "."\n");
        fwrite($file, "Buku".
                "             $qtybuku".
                "             $hargabuku".
                "             $jumlahbuku".
                "\n"
            );
        fwrite($file, "Mouse".                
                "            $qtymouse".
                "             $hargamouse".
                "             $jumlahmouse".
                "\n"
            );	
        fwrite($file, "FlashDisk".
                "        $qtyflashdisk".
                "             $hargaflashdisk".
                "             $jumlahflashdisk".
                "\n"
            );	
        fwrite($file, "Pulpen".                 
                "           $qtypulpen".
                "             $hargapulpen".
                "             $jumlahpulpen".
                "\n"
            );
        fwrite($file, "Toltal Harga : $totalharga  |" ."Diskon : $diskon%"."\n");
        fwrite($file, "Jumlah Harus diBayar : number_format($hargabayar) "."\n")		
    ?>
</body>

</html>