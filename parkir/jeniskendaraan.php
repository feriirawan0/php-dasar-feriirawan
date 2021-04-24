<?php
include_once "function/helper.php";
include_once "function/function.php";
include_once "navbar.php";
include_once "module/jenis_kendaraan/action.php";
if (isset($_POST["tambahJenis"])) {
	tambah($_POST);
}
$jenis = query("SELECT * FROM jeniskendaraan");

?>
<div id="pebungkus">
	<div class="card">
		<h4 class="card-header">Jenis Kendaraan</h4>
		<div class="card-body">
			<div class="grid">
				<div class="kiri">
					<div class="table-responsive">
						<form  method="post" class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
							<table>
								<tr>
									<th>No</th>
									<th>Jenis Kendaraan</th>
									<th>Harga/jam</th>
									<th>Action</th>
								</tr>
								<?php $i =1; ?>
								<?php foreach ($jenis as $jns): ?>
								<tr>
									<td><?php echo $i ?></td>
									<td><?php echo $jns["jeniskendaraan"] ?></td>
									<td><?php echo $jns["bayar"] ?></td>
									<td>
										<a href='module/jenis_kendaraan/edit.php?id=<?= $jns["jenis_id"]?>' class="btn btn-success btn-sm" >Edit</a>
										<a href='module/jenis_kendaraan/hapus.php?id=<?=$jns["jenis_id"]?>' class="btn btn-danger btn-sm">Hapus</a>
									</td>
								</tr>
								<?php $i++; ?>
								<?php endforeach ?>
							</table>
						</form>
					</div>
				</div>
				<div class="kanan">
					<div class="container" style="margin-top: 5%">
						<h4>Tambah Jenis Kendaraan</h4>
						<form  method="post">
							<input type="text" name="jenis" id="nama" placeholder="Jenis Kendaraan" class="form-control"><br>
							<input type="text" name="biaya" id="biaya" class="form-control" placeholder="Biaya/Jam"><br>
							<button name="tambahJenis" type="submit" class="btn btn-primary btn-sm">Tambah</button>
							
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>