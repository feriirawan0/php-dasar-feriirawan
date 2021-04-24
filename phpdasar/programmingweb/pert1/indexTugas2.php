<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2 | Feri Irawan</title>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap");
        * {
        position: relative;
        }

        body,
        input {
        font-family: "Poppins", sans-serif;
        }
    </style>
</head>
<body>
    <h2>Menghitung Konvresi Suhu</h2> 
    <form action = "<?php echo $_SERVER['PHP_SELF']; ?>" method = "GET"> 
    <fieldset>
    <legend>Menghitung Konversi Suhu</legend>
    Derajat: 
    <input type = "text" name = "derajat" size=30 placeholder="Masukan Suhu..."> 
    <select name="scale"> 
        <option value="celcius">Celsius</option> 
        <option value="fahrenheit">Fahrenheit</option>
        <option value="kelvin">Kelvin</option> 
        <option value="reamur">Reamur</option> 
    </select> 
    <br/> 
    <input type = "submit" name = "Konversi Suhu"/>
    </form>
    <?php echo "<br>"; ?>
    <?php 

    //cek input
    if (array_key_exists('derajat',$_GET)){
        $scale = $_GET['scale'];
        $derajat = $_GET['derajat'];
        $firstLength = strlen($_GET['derajat']);
        
        if(($firstLength > 0) && (is_numeric($_GET['derajat'])))
		{
		if ($scale == "celcius") 
		{
                print "<table border><tr><th colspan=2> Hasil Konversi</th></tr><tr><td>$derajat</td><td>celsius</td></tr>"; 
                $c_2_f = $derajat*9/5+32; 
                print "<tr><td>$c_2_f</td><td>fahrenheit</td></tr>"; 
                $c_2_k = $derajat+273.15; 
                print "<tr><td>$c_2_k </td><td>kelvin</td></tr>"; 
                $c_2_r = $c_2_f-32*4/9; 
                print "<tr><td>$c_2_r</td><td>reamur</td></tr></table>";} 

            if ($scale == "fahrenheit") 
            {
                print "<table border><tr><th colspan=2> Hasil Konversi</th></tr><tr><td>$derajat</td><td>farhenheit</td></tr>"; 
                $f_2_c = ($derajat -32)*5/9; 
                print "<tr><td>$f_2_c</td><td>celsius</td></tr>"; 
                $f_2_k = $f_2_c+273.15; 
                print "<tr><td>$f_2_k </td><td>kelvin</td></tr>"; 
                $f_2_r = $derajat-32*4/9; 
                print "<tr><td>$f_2_r</td><td>reamur</td></tr></table>";
            } 
            
            if ($scale == "kelvin") 
            {
                print "<table border><tr><th colspan=2> Hasil Konversi</th></tr><tr><td> 
                $derajat</td><td>kelvin</td></tr>"; 
                $k_2_f = ($derajat - 273.15) * 9 / 5 + 32; 
                print "<tr><td>$k_2_f</td><td>fahrenheit</td></tr>"; 
                $k_2_c = $derajat-273.15; 
                print "<tr><td>$k_2_c </td><td>celsius</td></tr>"; 
                $k_2_r = $k_2_f-32*4/9; 
                print "<tr><td>$k_2_r</td><td>reamur</td></tr></table>";
            } 
            
            if ($scale == "reamur") 
            {
                print "<table border><tr><th colspan=2> Hasil Konversi</th></tr><tr><td>$derajat</td><td>reamur</td></tr>"; 
                $r_2_f = $derajat-459.6; 
                print "<tr><td>$r_2_f</td><td>fahrenheit</td></tr>"; 
                $r_2_c = ($r_2_f - 32)*5/9; 
                print "<tr><td>$r_2_c </td><td>celsius</td></tr>"; 
                $r_2_k = $r_2_c + 273.15; 
                print "<tr><td>$r_2_k</td><td>kelvin</td></tr></table>";
            } 
        }
        else
            //print an error message if input is NULL or NaN
            echo "<span style = \"color:red\">
            *Harap Masukkan Suhu yang Valid.</span>";
    }

    ?> 
</body>
</html>