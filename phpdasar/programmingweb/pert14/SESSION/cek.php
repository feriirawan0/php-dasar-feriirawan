<?php
error_reporting(0);
// mulai
session_start();
// cek apakah nilai username masih kosong
if (!isset($_SESSION['namauser']))
{
    // maka user akses tidak bisa login
    echo "Anda belum login";
    exit;
}

?>