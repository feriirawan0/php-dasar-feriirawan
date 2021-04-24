<?php
include_once 'action.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Parkir</title>
	</head>
	<body>
		<?php include_once ('../../navbar.php'); ?>
		<div id="pebungkus">
			<div class="card">
				<h4 class="card-header">Kendaraan keluar</h4>
				<div class="card-body">
					<div class="table-responsive">
						<form action="" method="post" class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
							<table>
								<tr>
									<th>Jenis Kendaraan</th>
									<th>Nomor Polisi</th>
									<th>Waktu Masuk</th>
									<th>Waktu Keluar</th>
									<th>Harga</th>
								</tr>
							
								<tr>
									<td><?php echo $msk["jeniskendaraan"] ?></td>
									<td><?php echo $msk["nomor_polisi"] ?></td>
									<td><?php echo $msk["waktu_masuk"] ?></td>
									<td><?php echo $msk["waktu_keluar"] ?></td>
									<td><?php echo $msk["harga"] ?></td>
								</tr>
							
							</table>
						</form>
					</div>
				</div>
			</div>
		</div>
		
	</body>
</html>