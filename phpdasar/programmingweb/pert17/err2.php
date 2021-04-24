<?php 

$koneksi = mysqli_connect('localhost','root','','db_tugas');

// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : ".mysqli_connect_error();
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Menampilkan data dari database</title>
</head>
<body>
<center>
	<table border="1" class="table">
		<tr>
			<th>No</th>
			<th>Kode</th>
			<th>Nama Bunga</th>		
			<th>Harga</th>		
			<th>Jumlah Beli</th>		
			<th>Kirim</th>		
			<th>Jarak</th>		
			<th>Pembayaran</th>		
			<th>Biaya Kirim</th>		
			<th>Total Harga</th>		
		</tr>
		<?php 
		// Pastikan nama tabel, nama field-field tabel yang diketik pada proses query sudah benar sesuai struktur tabel pada database. ganti tb_tugas menjadi tb_bunga
        $query_mysql = mysqli_query($koneksi, "SELECT * FROM tb_tugas");
		$no = 1;
		while($data = mysqli_fetch_array($query_mysql)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $data['kode']; ?></t>
			<td><?php echo $data['nmbunga']; ?></td>
			<td><?php echo $data['harga']; ?></td>
			<td><?php echo $data['jmlbeli']; ?></td>
			<td><?php echo $data['kirim']; ?></td>
			<td><?php echo $data['jarak']; ?></td>
			<td><?php echo $data['pembayaran']; ?></td>
			<td><?php echo $data['byakirim']; ?></td>
			<td><?php echo $data['tharga']; ?></td>
		</tr>

		<?php } ?>
	</table>
    </center>
</body>
</html>