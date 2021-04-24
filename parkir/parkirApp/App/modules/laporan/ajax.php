<?php
require '../../function/function.php';
// require 'action.php';
$jenis_kendaraan = $_GET["jeniskendaraan"];
$query = "SELECT * FROM `kendaraan` INNER JOIN  jeniskendaraan ON kendaraan.jenis_id = jeniskendaraan.jenis_id WHERE keterangan = 'Keluar' AND
			jeniskendaraan LIKE '%$jenis_kendaraan%'";
$kendaraan= query($query);
?>
<form  method="post" class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
	<table>
		<tr>
			<th>No</th>
			<th>Jenis Kendaraan</th>
			<th>Nomor Polisi</th>
			<th>Waktu Masuk</th>
			<th>Waktu keluar</th>
			<th>Harga</th>
			<th>Status</th>
		</tr>
		<?php $i =1; ?>
		<!-- <?php mysqli_connect() ?> -->
		
		<?php foreach ($kendaraan as $k): ?>
		
		
		
		<tr>
			<td><?php echo $i ?></td>
			<td><?php echo $k["jeniskendaraan"] ?></td>
			<td><?php echo $k["nomor_polisi"] ?></td>
			<td><?php echo $k["waktu_masuk"] ?></td>
			<td><?php echo $k["waktu_keluar"] ?></td>
			<td><?php echo $k["harga"] ?></td>
			<td><?php echo $k["keterangan"] ?></td>
		</tr>
		<?php $i++; ?>
		
		
		<?php endforeach ?>
	</table>
</form>