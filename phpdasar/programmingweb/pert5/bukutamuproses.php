<?php 
// memanggil data dari bukutamutgs
if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $komentar = $_POST['komentar'];

    echo"Selamat pesan saudara $nama sudah masuk";
    include ("bukutamutgs.php");
}

echo"<center><strong>Daftar Buku Tamu<hr></strong></center>";
$file=fopen("bukutamu.dat","a+");
fputs($file, $nama."|".$email."|" .$komentar."\n");
fclose($file);
        printf("Nama : %s <br>\n", $nama);
        printf("E-mail : %s <br>\n", $email);
        printf("Komentar : %s <br>\n", $komentar);
        print ( "<hr>");
print ("<a href=bukutamutgs.php target=_self>Kembali</a>");
?>