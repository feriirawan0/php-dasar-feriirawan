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
        //upload gambar
        $gambar  = upload();
        if( !$gambar){
            return false;
        }


        // query insert data
        $query = "INSERT INTO mahasiswa
                    VALUES
                    ('', '$nama', '$nim', '$email', '$jurusan', '$gambar')";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);

}



function upload (){
    
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];


    // cek apakah tidak ada gambar yang diupload 
    if($error == 4){
        echo "
            <script>
            alert('pilih gambar dahulu!');
            </script>
        ";
        return false;
    }


    // cek apakah yang diupload adalah gambar
    
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode ('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if ( !in_array($ekstensiGambar, $ekstensiGambarValid) ){
        echo "
            <script>
                alert('yang anda upload bukan gambar!');
            </script>
        ";
        return false;
    }

    // cek jika ukuran terlalu besar diatas 2MB
    if ($ukuranFile > 1000000){
        echo "
        <script>
            alert('Ukuran gambar terlalu besar!');
        </script>
    ";
    return false;
    }

    // lolos pengecekan, gambar siap diupload 
    //generete nama gambar baru 
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    move_uploaded_file($tmpName, 'img/'. $namaFileBaru);

    return $namaFileBaru;

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
    $gambarOld = htmlspecialchars ($data["gambarOld"]);
    //cek apakah user pilih gambar baru atau tidak
    if( $_FILES['gambar']['error'] === 4){
        $gambar = $gambarOld;
    } else{
        $gambar = htmlspecialchars ($data["gambar$gambar"]);
    }



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




function cari($keyword){ //pencariian dengan flexsibel
    $query = "SELECT * FROM mahasiswa
                WHERE
                nama LIKE '%$keyword%' OR
                nim LIKE '%$keyword%' OR
                email LIKE '%$keyword%' OR
                jurusan LIKE '%$keyword%'
    ";
    return query($query);
}


function registrasi($data){
    global $conn;

    $username =  strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);


    // cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username='$username'");
    if(mysqli_fetch_assoc($result) ) {
        echo "<script>
                alert('username sudah terdaftar!'); 
            </script>
            ";
            return false;
    }



    //cek konfirmasi password
    if ( $password !== $password2 ) {
        echo "<script>
                alert('konfirmasi password tidak sesuai!'); 
            </script>
        ";
        return false;
    }

    // enskripsi password //$password = md5($password);
    $password = password_hash($password, PASSWORD_DEFAULT);
    



    //tambahkan user baru ke database
    mysqli_query($conn, "INSERT INTO user VALUES('', '$username' , '$password')");
    return mysqli_affected_rows($conn);

}




?>