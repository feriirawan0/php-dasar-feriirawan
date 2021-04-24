<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Tugas</title>
</head>
<body>
    <h2 align="center">Perkalian Matriks Ordo 3x3</h2>
    <?php
    error_reporting(0);
        $a = array();
        $a[0] = $_POST['a11'];
        $a[1] = $_POST['a12'];
        $a[2] = $_POST['a13'];
        $a[3] = $_POST['a21'];
        $a[4] = $_POST['a22'];
        $a[5] = $_POST['a23'];
        $a[6] = $_POST['a31'];
        $a[7] = $_POST['a32'];
        $a[8] = $_POST['a33'];

            $b = array();
            $b[0] = $_POST['b11'];
            $b[1] = $_POST['b12'];
            $b[2] = $_POST['b13'];
            $b[3] = $_POST['b21'];
            $b[4] = $_POST['b22'];
            $b[5] = $_POST['b23'];
            $b[6] = $_POST['b31'];
            $b[7] = $_POST['b32'];
            $b[8] = $_POST['b33'];

                $c = array();
                $c[0] = ($a[0]*$b[0])+($a[1]*$b[3])+($a[2]*$b[6]);
                $c[1] = ($a[0]*$b[1])+($a[1]*$b[4])+($a[2]*$b[7]);
                $c[2] = ($a[0]*$b[2])+($a[1]*$b[5])+($a[2]*$b[8]);
                $c[3] = ($a[3]*$b[0])+($a[4]*$b[3])+($a[5]*$b[6]);
                $c[4] = ($a[3]*$b[1])+($a[4]*$b[4])+($a[5]*$b[7]);
                $c[5] = ($a[3]*$b[2])+($a[4]*$b[5])+($a[5]*$b[8]);
                $c[6] = ($a[6]*$b[0])+($a[7]*$b[3])+($a[8]*$b[6]);
                $c[7] = ($a[6]*$b[1])+($a[7]*$b[4])+($a[8]*$b[7]);
                $c[8] = ($a[6]*$b[2])+($a[7]*$b[5])+($a[8]*$b[8]);
    ?>
<div class="container m-auto" style="width: 500px;">
    <table class="table mt-3 text-center">
    <?php
        echo "<tr>";
        for($k=0; $k<=2; $k+=1)
    {
        echo "<td>$c[$k]</td>";
    }
        echo "</tr><tr>";
        for($k=3; $k<=5; $k+=1)
    {
        echo "<td>$c[$k]</td>";
    }
        echo "</tr><tr>";
        for($k=6; $k<=8; $k+=1)
    {
        echo "<td>$c[$k]</td>";
    }
    echo "</tr>";
    ?>
    </table>
    </div>
</body>
</html>