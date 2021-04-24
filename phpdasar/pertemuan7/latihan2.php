<?php 
//cek apakah tidak ada data  di $_GET
// if( !isset($_GET["nama"]) ){
//     //redirect
//     header("Location: latihan1.php");
//     exit;
// }

if( !isset($_GET["nama"])||
    !isset($_GET["nim"]) ||
    !isset($_GET["email"]) ||
    !isset($_GET["jurusan"]) ||
    !isset($_GET["gambar"])
    ){
    //redirect
    header("Location: latihan1.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pakaian</title>
</head>
<body>

<ul>
    <li><img src="img/<?php echo $_GET["gambar"]; ?>"></li>
    <li><?php echo $_GET["nama"]; ?></li>
    <li><?php echo $_GET["nim"]; ?></li>
    <li><?php echo $_GET["email"]; ?></li>
    <li><?php echo $_GET["jurusan"]; ?></li>
</ul>
<a href="latihan1.php">Kembali ke daftar pakaian</a>
    
</body>
</html>