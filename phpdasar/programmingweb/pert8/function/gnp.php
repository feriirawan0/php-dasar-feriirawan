<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Bilangan genap habis dibagi 3</title>
</head>
<body>
<div>
    <?php
            $jml=0;
            
            for ($i=1;$i<=100;$i++) //membuat variabel i = 1 dan membuat perulangan dan akan berhenti sampai i = 100
            {
            if($i%3==0) //jika hasil bagi antara bilangan i dengan 2 = 0 maka itubilangan genap
            {
                echo $i."<br>"; //Menampilkan bilangan genap
                $jml = $jml+1; //hitung jml bilangan
                
}
}
echo "<div class='container'>";
	echo "<button type='button' class='btn btn-primary mt-5'> Jumlah bilang Sebanyak : <span class='badge badge-danger p-2'>".$jml."</span></button>";
	echo "</div>";
?>
    </tbody>
</table>

</body>
</html>