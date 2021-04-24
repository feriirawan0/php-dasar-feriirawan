<?php
 @$harga= $_POST['harga'];
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diskon | Feri Irawan</title>
    <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap");
        * {
        position: relative;
        }

        body,
        input {
        font-family: "Poppins", sans-serif;
        }
        label{
            position: relative;
            margin: 0 70px;
            font-size: 1em;
            color: #0013f0;
            text-decoration: none;
        }
    </style>
</head>
<body>
<h1>Diskon</h1>
<fieldset>
    <legend align="center">Menghitung diskon</legend>
<h3>Isi Data:</h3>
    <form action="" method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Masukan Harga</td>
                <td>:</td>
                <td><input type="text" name="harga" required ></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="submit" value="Hitung"></td>
            </tr>
        </table>

<?php 
            $jumlah_bayar = "";
            $diskon = "";
            $proses = "harga";
            
            switch($harga)
            {
            case (0):
                break;
                case ($harga>=500000):
                        $diskon = 0.5 * $harga;
                        break;
            case ($harga>=100000) :
                        $diskon = 0.1 * $harga;
                        break;
            case ($harga>=50000):
                        $diskon = 0.05 * $harga;
                        break;  
                default:
                        $diskon = "0";
                        break;
        
            }
            echo "jumlah bayar  = " . $harga . "<br/>";
            echo "diskon = " . $diskon . "<br/>";
            $jumlah_bayar = (int)$harga-(int)$diskon;
            echo "<b>harga Bayar = RP. $jumlah_bayar </b><br/>";
            ?>
    </form>
</body>
</html>