<?php 
// variabel scope /lingkup variabel
// $x = 10;
// function tampilX()
// {
//     global $x;
//     echo $x;
// }
// tampilX();

//SUPERGLOBALS
//variabel global milik php
//merupakan array associativ



//$_GET
// $_GET["nama"] = "Feri Irawan";
// $_GET["nim"] = "17101100587";


$mahasiswa = [
    [
        "nama" => "Baju Wanita",
        "nim" => "17101100587",
        "email" => "Email-Feriirawan",
        "jurusan" => "Teknik Informatika",
        "gambar" => "wa.jpg"
    ],
    [
        "nama" => "Baju Dress",
        "nim" => "17101100587",
        "email" => "Email-Feriirawan",
        "jurusan" => "Teknik Informatika",
        "gambar" => "wb.jpg"
    ],
    [
        "nama" => "Baju Adiddas",
        "nim" => "17101100587",
        "email" => "Email-Feriirawan",
        "jurusan" => "Teknik Informatika",
        "gambar" => "k.jpg"
    ],
    [
        "nama" => "Sweeter Wanita",
        "nim" => "17101100587",
        "email" => "Email-Feriirawan",
        "jurusan" => "Teknik Informatika",
        "gambar" => "jo.jpg"
    ],
    [
        "nama" => "Jersey Arsenal",
        "nim" => "17101100587",
        "email" => "Email-Feriirawan",
        "jurusan" => "Teknik Informatika",
        "gambar" => "j.jpg"
    ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h1>Daftar Pakaian</h1>
    <ul>
    <?php foreach($mahasiswa as $mhs): ?>
        <li>
            <a href="latihan2.php?nama=<?php echo $mhs["nama"]; ?>
            &nim=<?php echo $mhs["nim"]; ?>&email=<?php echo $mhs["email"] ?>
            &jurusan=<?php echo $mhs["jurusan"]; ?> &gambar=<?php echo $mhs["gambar"]; ?>">
            <?php echo $mhs["nama"]; ?></a>
        </li>
    <?php endforeach; ?>
    </ul>
</body>
</html>


