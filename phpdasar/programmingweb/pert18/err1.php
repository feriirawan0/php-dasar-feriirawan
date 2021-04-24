<?php 

$koneksi = mysqli_connect('localhost','root','root','db_tugas');

// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
// biasanya kalau memakai xampp yang dari windows untuk password itu kosong apabila setting default mysqlnya . adi yang root itu dikosongin.
?>