<?php 
//Koneksi ke database DBMS
$conn = mysqli_connect("localhost", "root", "", "phpdasar");


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
        global $conn; //global untuk mencari variabel yang berada diluar
        //htmlspecialchars untuk menghindar dari hack
        //ambil data dari tiap elemen form
        //htmlspecialchars untuk menghindar dari hack
        $nama = htmlspecialchars ($_POST["nama"]);
        $nim = htmlspecialchars ($_POST["nim"]);
        $email = htmlspecialchars ($_POST["email"]);
        $jurusan = htmlspecialchars ($_POST["jurusan"]);
        $gambar = htmlspecialchars ($_POST["gambar"]);

        // query insert data
        $query = "INSERT INTO mahasiswa
                    VALUES
                    ('', '$nama', '$nim', '$email', '$jurusan', '$gambar')";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);

}



function hapus ($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");

    return mysqli_affected_rows($conn);
}





function ubah($data){
    global $conn; //global untuk mencari variabel yang berada diluar
    //htmlspecialchars untuk menghindar dari hack
    //ambil data dari tiap elemen form
    //htmlspecialchars untuk menghindar dari hack
    $id = $data["id"];
    $nama = htmlspecialchars ($data["nama"]);
    $nim = htmlspecialchars ($data["nim"]);
    $email = htmlspecialchars ($data["email"]);
    $jurusan = htmlspecialchars ($data["jurusan"]);
    $gambar = htmlspecialchars ($data["gambar"]);

    // query update data
    $query = "UPDATE mahasiswa SET
                nama = '$nama', 
                nim  = '$nim',
                email = '$email',
                jurusan = '$jurusan',
                gambar = '$gambar'
            WHERE  id = $id
    ";
    //jalankan queryna
    mysqli_query($conn, $query);
    //kembalikan
    return mysqli_affected_rows($conn);

}




?>