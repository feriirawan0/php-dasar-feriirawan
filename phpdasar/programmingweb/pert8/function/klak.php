<!DOCTYPE html>
<html>
<head>
    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<div class="container m-auto">
    <?php
    $bil1=null;
    $bil2=null;
    if (isset($_GET['bil1'])) {

        $bil1=$_GET['bil1'];
        $bil2=$_GET['bil2'];
        $hasil=0;
        $operasi=$_GET["operasi"];
        switch ($operasi) {
            case '+':
                $hasil = $bil1+$bil2;
                break;
            case '-':
                $hasil = $bil1-$bil2;
                break;
            case 'x':
                $hasil = $bil1*$bil2;
                break;
            case '/':
                $hasil = $bil1/$bil2;
                break;
            case '%':
                $hasil = $bil1%$bil2;
                break;

            case '**':
                $hasil = $bil1**$bil2;
                break;
        }
    }
    ?>
    <div class="rows" >
        <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="get">
            <h2 class='display-4'>Kalkulator</h2>
            <div class="form-group">
                <label class="h5">Bilangan 1:</label>
                <input type="text" name="bil1" class="form-control" value="<?php echo $bil1; ?>" required>
            </div>
            <div class="form-group">
                <label class="h5">Bilangan 2:</label>
                <input type="text" name="bil2" class="form-control" value="<?php echo $bil2; ?>"  required>
            </div>
            <div class="form-group">
                <select class="form-control" name="operasi" >
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="x">x</option>
                    <option value="/">/</option>
                    <option value="%">%</option>
                    <option value="**">**</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Hitung</button>
            <button type="reset" class="btn btn-danger">reset</button>
        </form>
        <br>
        <?php
        if (isset($_GET['bil1'])) {
            echo "<h1 class='display-4'>Hasil = $hasil</h1>";
        }
        ?>
    </div>
</div>
</body>
</html>