<?php
session_start();

unset($_SESSION['namauser']);
echo "Anda telah logout";
?>
<!-- session_destroy() atau unset($_SESSION[‘nama session’]).
session_destroy() digunakan untuk menghapus semua session. Jadi, misalkan dalam script Anda terdapat 10 nama session, dan misalkan Anda ingin menghapus semua session tersebut maka gunakan session_destroy(). Lalu unset($_SESSION[‘nama session’]) digunakan untuk menghapus session tertentu saja. -->