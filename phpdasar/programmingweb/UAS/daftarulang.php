
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
          <th>Form Daftar Ulang</th>
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
          <td>Hari Harus Datang</td>
          <td><input type="text" name="hari_datang" id="hari_datang" required></td>
        </tr>
        <tr>
          <td>Tanggal Harus Datang</td>
          <td><input type="text" name="tgl_datang" id="tgl_datang" required></td>
        </tr>
        <tr>
          <td>Hari Datang</td>
          <td><input type="text" name="hari" id="hari" required></td>
        </tr>
        <tr>
          <td>Tanggal Datang</td>
          <td><input type="text" name="tgl" id="tgl" required></td>
        </tr>
        <tr>
        <td>Berkas</td>
          <td>
          <input type="checkbox"> KTP   
          <input type="checkbox"> KK
          <input type="checkbox"> Ijazah/akte
          </td>
        </tr>      
        <tr>
        <td>Keperluan </td>
        <td><select name="keperluan" id="">
            <option value="Wisata">Wisata</option>
            <option value="Umroh">Umroh</option>
            <option value="Bekerja">Bekerja</option>
        </select></td>
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
                <th width="100">Keperluan</th>
                <th width="100">KTP</th>
                <th width="100">KK</th>
                <th width="100">Ijazah/Akte</th>
                <th width="100">Keterangan</th>
                <th width="100">No. Antrian</th>
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
                <td align="center"></td>
                <td align="center">
                <a href="edit.php?id=<?= $row['id']; ?>" class="btn btn-primary">Edit </a>
                <a href="hapus.php?id=<?= $row['id']; ?>" onclick="return confirm('yakin?');" class="btn btn-danger">Hapus</a>
                </td>
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