<?php

//  dan nidn dosen (password min 8 digit)
    $kalimat="PHPUNPAM";
    $hasil_posisi=strpos($kalimat,"a",3);
    echo "mencari password awal ";
    var_dump($hasil_posisi);

    $hasil_posisi2=stripos($kalimat,"h");
    echo "Hasil fungsi stripos ".$hasil_posisi2;
    echo "<hr/>";

    echo "<br>";
    echo "Mencari Nind dosen ";
    $ndin="0429057702";
    $hasil_posisi=strpos($ndin,"9");
    var_dump($hasil_posisi);

    $hasil_posisi2=stripos($ndin,"9");
    echo "Hasil fungsi stripos ".$hasil_posisi2;
?>
