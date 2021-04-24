<?php 
//Koneksi ke database 
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

function query($query){
    global $conn; //mencari variabel yang berada diluar
    $result = mysqli_query($conn, $query );
    $rows = [];
    while($row = mysqli_fetch_assoc($result) ){
        $rows[] = $row;
    }
    return $rows;
}
?>