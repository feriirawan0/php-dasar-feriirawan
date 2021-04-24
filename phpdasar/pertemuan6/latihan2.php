<?php 
// $mahasiswa = [
//     ["Feri Irawan", "17101100587","Email","Teknik Informatika"],
//     ["Andre", "17101100587","Email","Teknik Mesin"]
// ];


// array Associative
//definisinya sama seperti array numerik, kecuali 
//key-nya adalah string yang kita buat sendiri
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
    <title>Daftar Mahasiswa</title>
</head>
<body>
<h1>Daftar Pakaian</h1>
<?php foreach ($mahasiswa as $mhs) : ?>
    <ul>
        <li>
            <img src="img/<?php echo $mhs["gambar"]; ?>" >
        </li>
        <li>Nama : <?php echo $mhs["nama"] ?></li>
        <li>NIM : <?php echo $mhs["nim"] ?></li>
        <li>Email : <?php echo $mhs["email"] ?></li>
        <li>Jurusan : <?php echo $mhs["jurusan"] ?></li>
    </ul>
<?php endforeach; ?>
</body>
</html>