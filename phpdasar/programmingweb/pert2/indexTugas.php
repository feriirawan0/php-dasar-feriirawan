<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mencari Luas Segiempat | Feri Irawan</title>
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
        hr{
            height: 10px;
            border: 0;
            box-shadow: 0 10px 10px -10px #8c8c8c inset;
            }
    </style>
</head>
<body>
<h1>Mencari Luas Segiempat</h1>
<fieldset>
    <legend align="center">Mencari Luas Segiempat</legend>
<h3>Isi Data:</h3>
    <form action="" method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Panjang</td>
                <td>:</td>
                <td><input type="text" name="panjang" required ></td>
            </tr>
            <tr>
                <td>Lebar</td>
                <td>:</td>
                <td><input type="text" name="lebar" required ></td>
            </tr>
            <tr>
                <td></td>    
                <td></td>
                <td><input type="submit" name="submit" value="Hitung"></td>   
            </tr>
        </table>
    </form>
<!-- php -->
    <?php
    if(isset($_POST['submit'])){
        $panjang    =$_POST['panjang'];
        $lebar      =$_POST['lebar'];
        $luas       = $panjang*$lebar;
        $luas_persegi = 2*($panjang+$lebar);
        $rms = "(Rumus : ($panjang x $lebar))";
    } else{
        return;
    }
?>
<br>
Diketahui : <?= $rms ?> 
<br><br>
<table width="400"rules="rows" >
    <tr>
        <td>Panjang |</td>
        <td>Lebar |</td>
        <td>Luas</td>
    </tr>
</table>
    <hr width="28%" align="left">
<table width="550" >
<tr>
    <td><?= $panjang; ?></td>
    <td><?= $lebar; ?></td>
    <td><?= $luas; ?></td>
</tr>
</table>
</body>
</html>