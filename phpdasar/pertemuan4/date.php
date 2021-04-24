<!-- funtion -->
<!-- url ; php.net/manual/en/funref.php -->

<?php 
// Date 
// untuk menapilkan tanggal dengan format tertentu 
// echo date("l, d-M-Y");



// Time
// UNIX Timestamp / EPPOCH time
//detik yang sudah berlalu sejak 1 januari 1970
// echo time();
// echo date("l, d M Y", time()+60*60*24*100);



// mktime 
// membuat sendiri detik
// mktime(0,0,0,0,0,0)
//jam, menit, detik, bulan, tanggal, tahun
// echo date("l, d M Y", mktime(0,0,0,5,3,1999));


// strtotime
// echo date("l", strtotime("3 mon 1999"));







?> 