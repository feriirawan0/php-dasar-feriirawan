<?php
include_once "../../function/function.php";
	include_once "action.php";
	$id = $_GET["id"];
	if (hapus($id)>0) {
echo "<script>
	alert('data berhasil dihapus');
	document.location.href='../../jeniskendaraan.php';
</script>";
}else{
echo "<script>
	alert('data gagal dihapus');
	document.location.href='../../jeniskendaraan.php';
</script>";
}
?>