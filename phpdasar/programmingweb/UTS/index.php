<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Halaman Input | UTS Feri Irawan</title>
</head>
<body>

<?php 
error_reporting(0);

if(isset($_POST['submit'])){

    $namasklh = $_POST['namasklh'];
    $jmlsiswa = $_POST['jmlsiswa'];
    $paket = $_POST['paket'];
    $byguru = $_POST['byguru'];
    $byenter = $_POST['byenter'];
    $bln = $_POST['bln'];
    $iuransiswa = $_POST['iuransiswa'];

    $byentertain = $jmlsiswa * str_replace(',', '', $byenter);
    
    $pendapatan = str_replace(',', '', 120000000) * $byguru * 13 + $byentertain;
    
    $siswabln = $pendapatan / ($bln * $jmlsiswa);

    $rtrt = $siswabln/1;

    $tpendapatan = $pendapatan + $siswabln;
}


?>





    <div  class="container" style="width: 500px;">
            <table>
                <thead>
                </thead>
                <tbody>
                <form action="" method="post">
            <tr>
                <td>Jumlah data :</td>
            </tr>
                <tr>
                    <td>Nama Sekolah</td>
                    <td><input type="text" autocomplete="off" name="namasklh" id="namasklh" value="" required></td>
                </tr>
                <tr>
                    <td>Jumlah Siswa</td>
                    <td><input type="text" autocomplete="off" name="jmlsiswa" id="jmlsiswa" value="" required></td>
                </tr>
                <tr>
                    <td>Paket</td>
                    <td>
                    <select name="paket" id="" >
                        <option>--Pilih Paket--</option>
                        <option value="Full-package">Full package</option>
                        <option value="Semi-Full">Semi-Full</option>
                        <option value="Konsultasi">Konsultasi</option>
                    </select>
                </tr>
                <tr>
                    <td>Biaya Guru</td>
                    <td><input type="text" autocomplete="off" name="byguru" id="byguru" value="" required></td>
                </tr>
                <tr>
                    <td>Biaya Entertain</td>
                    <td><input type="text" autocomplete="off" name="byenter" id="byenter" value="2,000" required></td>
                </tr>
                <tr>
                    <td>Jumlah Pembayaran</td>
                    <td>
                    <input type="radio" autocomplete="off" name="bln" value="10" checked="checked"> 10 bln 
                    <input type="radio" autocomplete="off" name="bln" value="11" checked="checked"> 11 bln
                    <input type="radio" autocomplete="off" name="bln" value="12" checked="checked"> 12 bln
                    </td>
                </tr>
                <tr>
                    <td>Iuran Siswa/bln</td>
                    <td><input type="text" autocomplete="off" name="iuransiswa" id="iuransiswa" value="" required></td>
                </tr>
                <tr>
                    <td clospan="3">
                    <button type="submit" name="submit" class="btn btn-primary mr-2 submit">Hitung</button>
                    </td>
                </tr>
                </form>
            </tbody>
        </table>
    </div>



<!-- Hasil -->
    <div class="container m-auto" >
    <hr style="height:2px;border-width:0;color:gray;background-color:gray">
        <table width="110%"  border="2" align="center" class="table mt-5 text-center">
        <tr>
                <th width="50">Nama Sekolah</th> 
                <th width="60">Jumlah Siswa</th>
                <th width="50">Paket</th>
                <th width="70">Biaya Guru</th>
                <th width="70">Biaya Entert.</th>
                <th width="70">Jumlah Pembayaran</th>
                <th width="70">Iuaran Siswa/bln</th>
        </tr>

        <tr>
                <td align="center"><?= $namasklh; ?></td>
                <td><?= $jmlsiswa; ?></td>
                <td><?= $paket; ?></td>
                <td align="center"><?= $byguru; ?></td>
                <td align="center">Rp.<?= number_format($byentertain); ?></td>
                <td align="center"><?= $bln; ?> bln</td>
                <td align="center"><?= number_format(ceil($siswabln)); ?></td>
        </tr>
        </table>
        <?php 
    

            echo "Rata-rata iuran siswa/bln :  ".number_format($rtrt);
            echo "<br>";
            echo "Total siswa seluruhnya :   ".$jmlsiswa;
            echo "<br>";
            echo "Total pendapatan :  " . number_format($tpendapatan);
            echo "<br>";
            echo "Jumlah sekolah Full :  "." "."sekolah";
            echo "<br>";
            echo "Jumlah sekolah Semi Full :  "." "."sekolah";
            echo "<br>";
            echo "Tumlah sekolah Konsultasi :  "." "."sekolah";
            echo "<br>";
            echo "<br>";
        
        ?>
        </div>
</body>
</html>