<?php
function err1() {
    echo "Programaan Web";
}
err2();
echo "Fatal Error !!";
?>

<?php 
// ( ! ) Fatal error: Uncaught Error: Call to undefined function err2() in C:\xampp\htdocs\phpdasar\programmingweb\pert16\err2.php on line 5
// ( ! ) Error: Call to undefined function err2() in C:\xampp\htdocs\phpdasar\programmingweb\pert16\err2.php on line 5
echo "kode di atas di definisikan fungsi err1() tapi kita memanggil fungsi lain yaitu err2() yang mana belum terdefinisi. ";

?>
