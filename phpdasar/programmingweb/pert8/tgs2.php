<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Tugas Pertemuan 8 | Feri Irawan</title>
</head>

<body>
    <div class="container m-auto" style="width: 500px;">
        <table class="table mt-3 text-center">
            <thead>
            </thead>
            <tbody>
                <form action="proses2.php" method="POST">
                    <tr>
                        <td>Kode Barang :</td>
                        <td>
                            <input type="text" 
                            class="form-control form-control-sm" autocomplete="off" name="kb" id="kb"value="0" autofocus>
                            </td>
                    </tr>
                    <tr>
                        <td>Jumlah Barang :</td>
                        <td>
                            <input type="text" class="form-control form-control-sm" autocomplete="off" name="jb" id="jb" value="0">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <button type="submit" name="submit" class="btn btn-primary mr-2 submit">Proses</button>
                            <button type="reset" name="reset" class="btn btn-warning">Reset</button>
                        </td>
                    </tr>
                </form> 
                <?php
                    echo "<p class='h6'>Nama : Feri Irawan</p>";
                    echo "<p class='h6'>NIM : 171011400587</p>";
                    echo "<p class='h6'>Kelas : 07TPLE008</p>";
                ?>                
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