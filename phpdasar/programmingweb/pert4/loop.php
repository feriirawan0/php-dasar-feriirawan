<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan 4 Tugas 2 | Feri Irawan</title>
    <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap");
        * {
        position: relative;
        }

        body,
        input {
        font-family: "Poppins", sans-serif;
        }
        label{
            position: relative;
            margin: 0 70px;
            font-size: 1em;
            color: #0013f0;
            text-decoration: none;
        }
    </style>
</head>
<body>
<h1>Looping Perkalian</h1>
<fieldset>
    <legend align="center">Looping Perkalian</legend>
    <h3></h3>
    <form method="POST" action="">
    <h5>Dari latihan diatas apa perbedaan perintah break dan continue?</h5>
    <p>Perintah continue melanjutkan perulangan ke tahap berikutnya (bila ada). Sedangkan break langsung mengakhiri perulangan, keluar dari perulangan dan melanjutkan ke program setelah perulangan.</p> <br>
    MASUKKAN ANGKA 
    <input type="text" name="bil1" /><br />
    <input type="submit" name="submit" value="Submit" />  
    </form> 
    <?php
    if(isset($_POST['submit']))
    {
    $bil1= $_POST['bil1'];
    for($a=1;$a<=$bil1;$a++)
    {
        for ($b=1; $b<=50;$b++)
        {
        if($b%2==1){
        $total=$a*$b;
        echo "<p> $a x $b=$total";
        }
    
        }
    }
}
?>
    </form>
</body>
</html>