<?php
$angka1 = 68.75;
$angka2 = 54.35;
$angka = $angka1 + $angka2;
// echo "$angka";
// echo $angka akan menghasilkan "123.1" , ", decimal 1 digit
$format = sprintf ("%01.1f", $angka);
// echo "$format";
// echo $format akan menghasilkan "123.10", decimal 2 digit
$format = sprintf ("%01.2f", $angka);
// echo $format akan menghasilkan "123.10"
// echo "$format";