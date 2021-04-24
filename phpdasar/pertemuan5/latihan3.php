<?php 
$mahasiswa = [
    ["Feri Irawan", "17101100587", "Teknik Informatika", "Email"],
    ["Feri Irawan", "17101100587", "Teknik Informatika", "Email-feryirawan"],
    ["Feri Irawan", "17101100587", "Teknik Informatika", "Email-feryirawan"]
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

<h1>Daftar Mahasiswa</h1>
<!-- cara 1 -->
<!-- <ul>
    <?php foreach($mahasiswa as $mhs) : ?>
        <li><?php echo $mhs; ?></li>
    <?php endforeach; ?>
</ul> -->
<!-- cara2 -->

<?php foreach($mahasiswa as $mhs) : ?>
        <ul>
            <li>Nama<?php echo $mhs[0]; ?></li>
            <li>NIM<?php echo $mhs[1]; ?></li>
            <li>Jurusan<?php echo $mhs[2]; ?></li>
            <li>Email :<?php echo $mhs[3]; ?></li>
        </ul>
<?php endforeach; ?>

    
</body>
</html>