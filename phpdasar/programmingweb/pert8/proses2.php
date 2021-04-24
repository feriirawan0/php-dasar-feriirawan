<?php
    if(isset($_POST['submit'])){
        $kb    =$_POST['kb'];
        $jb    =$_POST['jb'];
        $nm_barang =[
                        "Bk" => "Buku",
                        "Ms" => "Mouse",
                        "FD" => "Flash Disk",
                        "PI" => "Pulpen",
        ];
        $hrgsatuan =[
                        "17500",
                        "55000",
                        "70000",
                        "25000"
        ];
        $kd_barang=[
                    "Bk",
                    "Ms",
                    "FD",
                    "Pi"
        ];
        $lokasi = [
                    "loc1",
                    "loc2",
                    "loc3",
                    "loc4"
        ];
        $byr1    =$jb*$hrgsatuan[0];
        $byr2    =$jb*$hrgsatuan[1];
        $byr3    =$jb*$hrgsatuan[2];
        $byr4    =$jb*$hrgsatuan[3];
        $total = $byr1 + $byr2 + $byr3 + $byr4;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Tugas PERTEMUAN 8</title>
</head>
<body>
<center>
<table border="1" cellpadding='6'>
    <tbody>
        <thead>
                <tr>
                    <td>Kode Barang</td>
                    <td>Nama Barang</td>
                    <td>Jumlah Beli</td>
                    <td>Harga Satuan</td>
                    <td>Lokasi</td>
                    <td>Bayar</td>
                </tr>
        </thead>
                <tr>
                    <td><?= $kd_barang[0]; ?></td>
                    <td><?= $nm_barang['Bk']; ?></td>
                    <td><?= $jb; ?></td>
                    <td align='right'><?= number_format($hrgsatuan[0]);?> </td>
                    <td align='right'><?= $lokasi[0]; ?></td>
                    <td align='right'><?= number_format($byr1); ?></td>
                </tr>                
                <tr>
                    <td><?= $kd_barang[1]; ?></td>
                    <td><?= $nm_barang['Ms']; ?></td>
                    <td><?= $jb; ?></td>
                    <td align='right'><?= number_format($hrgsatuan[1]);?> </td>
                    <td align='right'><?= $lokasi[1]; ?></td>
                    <td align='right'><?= number_format($byr2); ?></td>
                </tr>                
                <tr>
                    <td><?= $kd_barang[2]; ?></td>
                    <td><?= $nm_barang['FD']; ?></td>
                    <td><?= $jb; ?></td>
                    <td align='right'><?= number_format($hrgsatuan[2]);?> </td>
                    <td align='right'><?= $lokasi[2]; ?></td>
                    <td align='right'><?= number_format($byr3); ?></td>
                </tr>                
                <tr>
                    <td><?= $kd_barang[3]; ?></td>
                    <td><?= $nm_barang['PI']; ?></td>
                    <td><?= $jb; ?></td>
                    <td align='right'><?= number_format($hrgsatuan[3]);?> </td>
                    <td align='right'><?= $lokasi[3]; ?></td>
                    <td align='right'><?= number_format($byr4); ?></td>
                </tr>
    </tbody>
</table>
<?php echo "Total Bayar :". number_format($total); ?>
</center>

    <!-- simpan data didalam .txt -->
    <?php 
        extract($_REQUEST);
        $file = fopen("save.dat", "a");
        fwrite($file, "Kode Barang   |      Nama Barang    |     Jumlah   |       Harga Satuan  |       Lokasi |        Bayar"."\n");
        fwrite($file,
                "        $kd_barang[0]".
                "             $nm_barang[Bk]".
                "             $jb".
                "             $hrgsatuan[0]".
                "             $lokasi[0]".
                "             $byr1".
                "\n"
            );
        fwrite($file,              
                "       $kd_barang[1]".
                "             $nm_barang[Ms]".
                "             $jb".
                "             $hrgsatuan[1]".
                "             $lokasi[1]".
                "             $byr2".
                "\n"
            );	
        fwrite($file,
                "      $kd_barang[2]".
                "             $nm_barang[FD]".
                "             $jb".
                "             $hrgsatuan[2]".
                "             $lokasi[2]".
                "             $byr3".
                "\n"
            );	
        fwrite($file,                
                "       $kd_barang[3]".
                "             $nm_barang[PI]".
                "             $jb".
                "             $hrgsatuan[3]".
                "             $lokasi[3]".
                "             $byr4".
                "\n"
            );
        fwrite($file, "Toltal Bayar : $total"."\n");		
    ?>
</body>
</html>