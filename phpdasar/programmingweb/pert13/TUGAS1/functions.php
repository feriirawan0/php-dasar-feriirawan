<?php 
//KONEKSI DB
$conn = mysqli_connect("localhost", "root", "", "db_berita");

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function t_kategori($data){
            // ambil data dari tiap elemen
            global $conn;

            $kategori = htmlspecialchars($data['kategori']);
        //insert data
        $query = "INSERT INTO tb_kategori VALUES 
        ('', '$kategori')";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
}

function t_berita($data){
    // ambil data dari tiap elemen
    global $conn;

    $id_kategori    = htmlspecialchars($data['id_kategori']);
    $jdl_berita     = htmlspecialchars($data['jdl_berita']);
    $isi_berita 	= htmlspecialchars($data['isi_berita']);
    $penulis 		= htmlspecialchars($data['penulis']);

    $date = date('Y-m-d H:i:s');
    
//insert data
$query = "INSERT INTO tb_berita VALUES 
('', '$id_kategori', '$jdl_berita', '$isi_berita', '$penulis', '$date')";

mysqli_query($conn, $query);

return mysqli_affected_rows($conn);
}


function hapus ($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM tb_berita WHERE id_berita = $id");

    return mysqli_affected_rows($conn);
}

function edit($data){
    global $conn;
    $id = $data["id_berita"];
    $id_kategori    = htmlspecialchars($data['id_kategori']);
    $jdl_berita     = htmlspecialchars($data['jdl_berita']);
    $isi_berita 	= htmlspecialchars($data['isi_berita']);
    $penulis 		= htmlspecialchars($data['penulis']);

    $date = date('Y-m-d H:i:s');



    // query update data
    $query = "UPDATE tb_berita SET
                id_kategori  = '$id_kategori',
                jdl_berita = '$jdl_berita',
                isi_berita = '$isi_berita',
                penulis = '$penulis',
                tgl_publish = '$date'
                WHERE id_berita = $id
    ";
    //jalankan queryna
    mysqli_query($conn, $query);
    //kembalikan
    return mysqli_affected_rows($conn);

}
function cari($keyword ){ //pencariian dengan flexsibel
    $query = "SELECT * FROM tb_berita JOIN tb_kategori ON `tb_berita`.`id_kategori`=`tb_kategori`.`id_kategori`
            WHERE 
            nama_kategori LIKE '%".$keyword."%' OR
            jdl_berita LIKE '%".$keyword."%' OR
            isi_berita LIKE '%".$keyword."%' OR
            penulis LIKE '%".$keyword."%' 
    ";
    
    return query($query);
}
// var_dump(cari($keyword)) ;
// var_dump(cari($keyword));







?>