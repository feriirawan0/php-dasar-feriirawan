<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 1 | Feri Irawan</title>
</head>
<body>
    <?php 
    $arr [15] = "20";
    $arr [10] = "5";
    $arr [20] = "10";
    $arr [5] = "15";
    $arr [2] = "9";

    foreach($arr as $alas => $tinggi ){
        echo"<table>";
        echo"Alas : $alas, Tinggi : $tinggi,"." Luas : "."$alas"*"$tinggi"."<th><td>";
        echo "</table>";
    }
    ?>
</body>
</html>