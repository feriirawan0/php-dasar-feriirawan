<?php 
echo "Warning Error!!";
include ("welcome.php");
?>
<?php 
// ( ! ) Warning: include(welcome.php): failed to open stream: No such file or directory in C:\xampp\htdocs\phpdasar\programmingweb\pert16\err3.php on line 3
// ( ! ) Warning: include(): Failed opening 'welcome.php' for inclusion (include_path='C:\xampp\php\PEAR') in C:\xampp\htdocs\phpdasar\programmingweb\pert16\err3.php on line 3
echo "Pada kode di atas kita menyertakan file welcome.php, namun bila file tersebut tidak ada dalam direktori, maka akan muncul warning error. Tapi hal itu tidak akan menghentikan eksekusi script.";

?>