<?php 

function tambah($data){
 	global $koneksi;

 	$jenis = $data["jenis"];
 	$biaya = $data["biaya"];

 	$query = "INSERT INTO jeniskendaraan VALUES ('','$jenis', '$biaya')";
 	mysqli_query($koneksi, $query);

 	return mysqli_affected_rows($koneksi);
 }

 function hapus($id){
 	global $koneksi;
 	$query = "DELETE FROM jeniskendaraan WHERE jenis_id = $id";
 	mysqli_query($koneksi, $query);
 	return mysqli_affected_rows($koneksi);
 }
 function edit($data){
  	global $koneksi;

	# cambil data dari tiap elemen
		$id = $data["id"];
		$jenis = htmlspecialchars( $data["jenis"]);
		$biaya = htmlspecialchars($data["biaya"]);

		// query insert data
		$query = "UPDATE jeniskendaraan SET 
					jeniskendaraan = '$jenis',
					bayar = '$biaya'
					WHERE jenis_id = $id";
		mysqli_query($koneksi, $query);

		return mysqli_affected_rows($koneksi);
  }
 ?>