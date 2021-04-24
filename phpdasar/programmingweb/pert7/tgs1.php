<?php

# asosiatif array
$listBuah = [
    '0' => 'Anggur',
    '1' => 'Jeruk',
    '2' => 'Naga',
    '3' => 'Duku'
];

var_dump(array_values($listBuah));
?>


<?php

$mahasiswa = "Nurul Huda, Lendis Fabri, Wahid Abdulloh";

# delimiter terdiri dari 2 karakter yaitu tanda koma dan spasi
var_dump(explode(", ", $mahasiswa));
?>

<?php

$buah = ['Apel', 'Jeruk'];

array_push($buah, 'Nanas');
var_dump($buah);