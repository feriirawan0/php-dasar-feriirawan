<?php
require '../../function/function.php';
// require 'action.php';
$keyword = $_GET["keyword"];
$query = "SELECT * FROM `kendaraan` INNER JOIN  jeniskendaraan ON kendaraan.jenis_id = jeniskendaraan.jenis_id WHERE keterangan = 'Masuk' AND
			nomor_polisi LIKE '%$keyword%'";
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
			<th>Action</th>
		</tr>
		<?php $i =1; ?>
		<?php mysqli_connect() ?>
		
		<?php foreach ($kendaraan as $k): ?>
		
		
		
		<tr>
			<td><?php echo $i ?></td>
			<td><?php echo $k["jeniskendaraan"] ?></td>
			<td><?php echo $k["nomor_polisi"] ?></td>
			<td><?php echo $k["waktu_masuk"] ?></td>
			<td><?php echo $k["waktu_keluar"] ?></td>
			<td><?php echo $k["harga"] ?></td>
			<td><?php echo $k["keterangan"] ?></td>
			<td>
				
				<?php ini_set('date.timezone', 'Asia/Jakarta');?>
				<a href='module/keluar/view.php?id=<?= $k["kendaraan_id"]?>&bayar=<?=$k["bayar"]?>&waktu=<?= date("Y-m-d H:i:s")?>' class="btn btn-warning" >Cek</a>
			</td>
		</tr>
		<?php $i++; ?>
		<?php endforeach ?>
	</table>
</form>