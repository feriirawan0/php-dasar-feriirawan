
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <div class="container m-auto" style="width: 500px;">
        <table class="table mt-3 text-center">
            <tbody>
            <thead>
            <tr>
            <tr>
                <th colspan="2">Menghitung Luas Segitiga | Feri Irawan</th>
            </tr>
            </thead>
                <form action="" method="POST">
                    <tr>
                        <td>Alas</td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-center" autocomplete="off" name="alas" id="alas" value="0">
                        </td>
                    </tr>
                    <tr>
                        <td>Tinggi</td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-center" autocomplete="off" name="tinggi" id="tinggi" value="0">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <button type="submit" name="submit" class="btn btn-primary mr-2 submit">Submit</button>
                            <button type="reset" name="reset" class="btn btn-warning">Reset</button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <?php
                            if(isset($_POST['submit'])){
                                $alas   =$_POST['alas'];
                                $tinggi =$_POST['tinggi'];
                                // menghitung luas segitiga
                                $luas = 1/2 * $alas * $tinggi;
                                echo "<table>";
                                echo "<tr>
                                        <td>No</td>
                                        <td>Alas</td>
                                        <td>Tinggi</td>
                                        <td>Luas</td>
                                        </tr>
                                        <br/>";
                                $i = 0;
                                while($i<=4){
                                $i++;
                                echo "<tr>
                                        <td>$i</td>
                                        <td>$alas</td>
                                        <td>$tinggi</td>
                                        <td>$luas</td>
                                        </tr>";
                                }
                                echo "</table>";
                            }
                            ?>
                        </td>
                    </tr>
                </form>
            </tbody>
        </table>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>