<?php 
//Koneksi ke database DBMS
$conn = mysqli_connect("localhost", "root", "", "db_uas");


function query($query){
    global $conn; //global untuk mencari variabel yang berada diluar
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result) ){
        $rows[] = $row;
    }
    return $rows;
}

    function tambah($data){
		global $conn; 
		$no_daftar = $_POST['no_daftar'];
		$nm_pemohon = $_POST['nama_pemohon'];
		$tgl_daftar = $_POST['tgl_daftar'];
		
		date_default_timezone_set('Asia/Jakarta');
		$hari = 'SENIN';
		$tgl = date('d F Y', strtotime('2020-12-20'));
		$jam = time('H:i:s');
	  
        // query insert data
        $query = "INSERT INTO daftar
                    VALUES ('','$no_daftar', '$nm_pemohon', '$tgl_daftar', '$hari', '$tgl', '$jam')";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);

}



function hapus ($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM daftar WHERE id = $id");

    return mysqli_affected_rows($conn);
}





function ubah($data){
	global $conn;
	global $hari;
	global $tgl;
	global $jam;

    $id = $data["id"];
	$no_daftar = $_data['no_daftar'];
	$nm_pemohon = $_data['nama_pemohon'];
	$tgl_daftar = $_data['tgl_daftar'];

    // query update data
    $query = "UPDATE daftar SET
                no_daftar = '$no_daftar', 
                nm_pemohon  = '$nama_pemohon',
                tgl_daftar = '$tgl_daftar',
                hari = '$hari',
                tgl = '$tgl',
                jam = '$jam',
            WHERE  id = $id
    ";
    //jalankan queryna
    mysqli_query($conn, $query);
    //kembalikan
    return mysqli_affected_rows($conn);

}




?>