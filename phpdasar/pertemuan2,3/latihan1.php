<?php 

//pertemuan 2 - php dasar
// sintaks php

// standar output
// echo, print
// print_r
// var_dump

//menuliskan sintaks php 
// 1. php di dalam html
// 2. html di dalam php

//variabel dan tipe data
//variabel 
//tidak boleh di ambil dengan angka, tapi boleh mengandung angka 
// $nama ="Feri Irawan";
// echo 'Halo, nama saya $nama';

// operator
// aritmatika
// + - * / %
// $x = 10;
// $y = 20;
// echo $x * $y;

// penggabung string / concatentation / concat
// .
// $nama_depan ="Feri";
// $nama_belakang="Irawan";
// echo $nama_depan." ".$nama_belakang;

// Assigment/penugasan
// =, +=, -=, *=, /=, %=, .=
// $x = 1;
// $x  -= 5;
// echo $x;
// $nama = "Feri";
// $nama .= " ";
// $nama .= "Irawan";
// echo $nama;


// perbandingan bollean
// <. >, <=, >=, ==, !=
// var_dump(1 == "1");


// identitas
// ===, !==
// var_dump(1 === "1")


// logika
// &&, ||, !


















// PERTEMUAN 3 CONTROL FLOW/STRUKTUR KENDALA

// PENGULANGAN DAN PENGKODISIAN 
// PENGULANGAN //
// for, 
// while,
// do... while, 
// foreach (pengulangan khusus array)

// for ($i = 0; $i < 5; $i++ ){
//     echo "Hello World! <br>";
// }
// $i = 0;
// while($i < 5){
//     echo "Hellow World! <br>";
//     $i++;
// }

// $i = 10;
// do{
//     echo "Hello World! <br>";
// $i++;
// } while( $i < 5 );

// <!-- pengulangan dalam html-->
// <?php 
//     for( $i = 1; $i <=3; $i++){
//         echo"<tr>";
//         for( $j =1; $j <=5; $j++){
//             echo"<td>$i , $j</td>";
//         }
//         echo"</tr>";
//     } 



// PENGKODISIAN //
// if else, 
// if else if else, 
// ternary,
// switch
















?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
    <style>
        .warna-baris{
            background-color: yellow;
        }
    </style>
</head>
<body>

<table border="1" cellpadding="10" cellspacing="0">
<!-- tag <tr> membuat baris -->
    <!-- membuat tag <td> untuk masing-masing kolom -->
    <!-- <tr>
        <td>1,1</td>
        <td>1,2</td>
        <td>1,3</td>
        <td>1,4</td> 
        <td>1,5</td>
    </tr>
    <tr>
        <td>1,1</td>
        <td>1,2</td>
        <td>1,3</td>
        <td>1,4</td>
        <td>1,5</td>
    </tr> -->

    <!-- pengulangan dengan tempalts-->
    <?php 
        for($i = 1; $i <= 5; $i++ ) : ?>
        <!-- memberi wanrna dgn php -->
        <?php if($i % 2 == 1) : ?>
        <tr class="warna-baris">
        <?php else : ?>
        <tr>
        <?php endif; ?>
        <!-- memeris warna tag baris dengan php -->

            <?php for($j = 1; $j <= 5; $j++) : ?>
            <td><?php echo"$i, $j"; ?></td>
            <?php endfor; ?>
        </tr>
    <?php endfor; ?>

</table>
    
</body>
</html>