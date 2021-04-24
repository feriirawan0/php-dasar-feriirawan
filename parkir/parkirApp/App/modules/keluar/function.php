<?php 
// require 'action.php';
include_once("../../function/helper.php");
include_once("../../function/koneksi.php");

function query($query){
	global $koneksi;
	$result= mysqli_query($koneksi, $query);
	$rows=[];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[]= $row;
	}
	return $rows;
 }
	// ambil id dari url
	$id = $_GET["id"];
	$knd = query("SELECT * FROM kendaraan WHERE kendaraan_id = $id")[0];
	
	if (isset($_POST["cek"])) {
	keluar($_POST);
}
	function keluar($data){
	global $id;
	global $koneksi;
	ini_set('date.timezone', 'Asia/Jakarta');
	$waktu_keluar = date("Y-m-d H:i:s");
	$waktu = mysqli_query($koneksi, "SELECT waktu_masuk FROM kendaraan WHERE kendaraan_id = $id");
	$waktu_masuk = mysqli_fetch_assoc($waktu);
	$keterangan = "Keluar";
	// $harga = ($waktu_keluar - $waktu_masuk );

	$query = "UPDATE kendaraan SET waktu_keluar = '$waktu_keluar', keterangan= '$keterangan' WHERE kendaraan_id = $id";
		mysqli_query($koneksi, $query);
		// header("location: ".BASE_URL."keluar.php");
		var_dump($waktu_keluar);
		var_dump($waktu_masuk);
		
}


 ?>
<form action="" method="post">
	<table>
	<tr>
		<th>Jenis Kendaraan</th>
		<th>Nomor Polisi</th>
		<th>Waktu Masuk</th>
		<th>Waktu Keluar</th>
		<th>Harga</th>
		<th>Action</th>
	</tr>
		
	<tr>
		<td><?php echo $knd["jenis_id"] ?></td>
		<td><?php echo $knd["nomor_polisi"] ?></td>
		<td><?php echo $knd["waktu_masuk"] ?></td>
		<td><?php echo $knd["waktu_keluar"] ?></td>
		<td><?php echo $knd["harga"] ?></td>
		<td>
			<button type="submit" name="cek" >buka</button>
		</td>	
	</tr>
	</table>
