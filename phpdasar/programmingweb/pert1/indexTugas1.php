<?php
    @$atas = $_GET['atas'];
    @$bawah = $_GET['bawah'];
    @$tinggi = $_GET['tinggi'];
    @$luas = (($atas + $bawah)*$tinggi)/2;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 1 | Feri Irawan</title>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap");
        * {
        margin: 0;
        padding: 0;
        position: relative;
        }

        body,
        input {
        font-family: "Poppins", sans-serif;
        }
        h1{
        margin: 0;
        padding: 0;
        text-align: center;
        box-sizing: border-box;
        position: relative;
        line-height: 60px;
        text-decoration: underline;
        }
        ul{
            list-style-type: none;
        }
        .form, ul{
            text-align: center;
        }
    </style>
</head>
<body>
<h1>Luas Trapesium</h1>
<form action="" method="GET" class="from">
        <ul>
            <li>
                <label for="atas">Garis Atas   : </label>
                <input type="text" name="atas" id="atas" value="<?php echo $atas; ?>" required> cm 
            </li><br>
            <li>
                <label for="bawah">Garis Bawah : </label>
                <input type="text" name="bawah" id="bawah" value="<?php echo $bawah;?>" required> cm
            </li> <br>
            <li>
                <label for="tinggi">Tinggi     : </label>
                <input type="text" name="tinggi" id="tinggi" value="<?php echo $tinggi; ?>" required> cm
            </li><br>
            <li>
                <button type="submit" name="submit">Hitung!</button>
            </li>
        </ul> <br>
    <ul><?php
    echo "Diketahui : <br>";
    echo "Garis Atas  =  $atas cm<br>";
    echo "Garis Bawah =  $bawah cm<br>";
    echo "Tinggi      =  $tinggi cm<br>";
    echo "<br>";
    echo "Maka : <br>";
    
    echo "Luas TRAPESIUM = ( rumus : ($atas + $bawah) * $tinggi) /2) =" .$luas." cm<sup>2</sup><br/>";
    ?></ul>
</form>
</body>
</html>