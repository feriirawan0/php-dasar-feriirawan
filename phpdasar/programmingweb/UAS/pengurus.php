
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>UAS | FERI IRAWAN</title>
  </head>
  <body>
  <div class="container">
 <br>
        
<table>
      <thead>
      <tr>
      <td><a href="index.php">Daftar</a></td>
        <td><a href="daftarulang.php">Daftar Ulang</a></td>
        <td> <a href="pengurus.php">Pengurus</a></td>
      </tr>
        <tr>
          <th>Pengurus</th>
        </tr>
      </thead>
      <tbody>
      <form action="" method="post">
        <tr>
          <td>No. Daftar</td>
          <td><input type="text" name="no_daftar" id="no_daftar" required></td>
        </tr>
        <tr>
          <td>Nama Pemohon</td>
          <td><input type="text" name="nama_pemohon" id="nama_pemohon" required></td>
        </tr>
        <tr>
          <td>Tanggal Daftar</td>
          <td><input type="text" name="tgl_daftar" id="tgl_daftar" required></td>
        </tr>
        <tr>
        <td >
            <button type="submit" name="submit" class="btn btn-primary mr-2 submit">Proses</button>
            <button type="reset" name="reset" class="btn btn-warning">Reset</button><td></td>
            </td>
        </tr>
        </form>
      </tbody>
</table>
<hr>
<table width="110%"  border="2" align="center" class="table mt-5 text-center">
        <tr>
                <th width="120">No. Daftar</th> 
                <th width="100">Nama Pemohon</th>
                <th width="100">Tgl Daftar</th>
                <th width="100">Hari</th>
                <th width="100">Tanggal</th>
                <th width="100">Jam</th>
                <th width="100">Action</th>
        </tr>

        <!-- <?php foreach ($tb_bunga as $row): ?> -->
        <tr>
                <td align="center"></td>
                <td></td>
                <td></td>
                <td align="center"></td>
                <td align="center"></td>
                <td align="center"></td>
                <td align="center"></td>
        </tr>
        <!-- <?php endforeach; ?> -->
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