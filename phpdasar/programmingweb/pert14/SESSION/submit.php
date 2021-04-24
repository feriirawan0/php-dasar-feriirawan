<?php

session_start(); //menjalankan session
// mengambil nilai yang di inputkan
$namauser = $_POST['username'];
$password = $_POST['password'];

    if ('loginsukses')
    {
        // menyimpan username kedalam variabel session
    $_SESSION['namauser'] = $namauser;
    
    echo "<p>Selamat datang ".$_SESSION['namauser']."</p>";
    echo "<p>Berikut ini menu navigasi Anda</p>";
    echo "<p><a href='hal1.php'>Menu 1</a> <a href='hal2.php'>Menu 2</a> <a href='hal3.php'>Menu 3</a></p>";
    }

?>