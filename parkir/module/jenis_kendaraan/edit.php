<?php
include_once "../../function/helper.php";
include_once "../../function/function.php";
include_once "action.php";
include_once "../../navbar.php";

$id = $_GET['id'];
	$edit = query("SELECT * FROM jeniskendaraan WHERE jenis_id = '$id'")[0];
	if (isset($_POST["edit"])) {	
	if (edit($_POST)>0) {
		echo "<script>
			alert('data berhasil diubah');
			document.location.href='../../jeniskendaraan.php';
		</script>";
	}else{
		echo "<script>
			alert('data gagal diubah');
		</script>";
	}
}
?>
<div id="pebungkus">
	<div class="card">
		<h4 class="card-header">Jenis Kendaraan</h4>
		<div class="card-body">
			<div class="grid">
				<div class="kanan">
					<div class="container" style="margin-top: 5%">
						<h4>Edit Jenis Kendaraan</h4>
						<form  method="post">
							<input type="hidden" name="id" value="<?= $edit["jenis_id"]?>">
							<input type="text" name="jenis" id="nama" placeholder="Jenis Kendaraan" class="form-control" value="<?= $edit['jeniskendaraan'] ?>"><br>
							<input type="text" name="biaya" id="biaya" class="form-control" placeholder="Biaya/Jam" value="<?= $edit['bayar'] ?>"><br>
							<button name="edit" type="submit" class="btn btn-success btn-sm">Edit</button>
							
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>