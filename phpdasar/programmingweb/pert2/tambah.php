<?php
error_reporting(0);
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2 | Feri Irawan</title>
</head>
<body>
<h1 align="center"> Input Barang</h1>
<?php
    $nama = $_POST['nama'];    
    $jml = $_POST['jumlah'];   
    $hrgsatu = $_POST['harga']; 

    $jmlharga= $jml*$harga; 

    {
        echo "";
    }
    if  ($total >= 1000000) {
        $discount=(($total*25)/100);
        $total_bayar=($total-$discount);
        echo "<p> Discount 25% </p>";
        echo "Total Bayar : Rp. $total_bayar,-"; 
        }

if(isset($_POST['submit'])){
    if($nama){    
        $error="<p style='color:#F00;'>* Masukan Nama </p>";
    }
    elseif(empty($jumlah)){ 
        $error="<p style='color:#F00;'>* Masukan jumlah Barang</p>";
    }
    elseif(empty($harga)){ 
        $error="<p style='color:#F00;'>* Masukan Harga</p>";
    }
    else{  
    
    }
}
    ?>
<form action="" method="post" enctype="multipart/form-data">
    <table border="0" cellspacing="10" width="800" align="center">

    <tbody>
    <tr><td colspan="3"><?php echo $error;?></td></tr>
    <tr>
        <td>Nama Peralatan</td>
        <td>:</td>
        <td><input type="text" name="nama" placeholder="Nama Peralatan" size="50" maxlength="30" 
        autocomplete="off" autofocus value="<?php echo $_POST['nama'];?>"/>
        </td>
    </tr>
    <tr>
        <td>Jumlah</td>
        <td>:</td>
        <td><input name="jumlah" placeholder="" rows="3" cols="50"/>
        <?php echo $_POST['jumlah'];?></input></td>
    </tr>
    <tr>
        <td>Harga Satuan</td>
        <td>:</td>
        <td><input type="text" name="harga" placeholder="Harga Satuan" size="20" maxlength="10" 
        value="<?php echo $_POST['harga'];?>"/></td>
    </tr>
    <!-- <tr>
        <td>Diskon Peralatan</td>
        <td>:</td>
        <td><input type="text" name="diskon" placeholder="Diskon Peralatan" size="30" maxlength="10" 
        value="<?php echo $_POST['diskon'];?>"/></td>
    </tr> -->
    <tr>
        <td colspan="3"><button type="submit" name="simpan">Proses Data</button</td>
    </tr>
</tbody>
</table>
</form>
</body>
</html>