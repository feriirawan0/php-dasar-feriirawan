<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelipatan | Feri Irawan</title>
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
<h1>Kelipatan</h1>
<fieldset>
    <legend align="center">Kelipatan</legend>
    <form action="" method="POST">
	<table>
		<tr>
			<td>Masukkan Nilai Awal</td>
			<td>:</td>
			<td><input type="text" name="nilai" placeholder="Masukkan Nilai" required></td>
		</tr>
		<tr>
			<td>Masukkan Nilai Kelipatan</td>
			<td>:</td>
			<td><input type="text" name="lipat" placeholder="Masukkan Nilai Kelipatan" required></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td><input type="submit" name="submit" value="TAMPILKAN"></td>
		</tr>
	</table>
    <?php
	if (isset($_POST['submit'])) {
		$nilai = $_POST['nilai'];
		$lipat = $_POST['lipat'];

		for ($i= 1; $i <= $nilai; $i++) { 
			if ( $bagi = $i % $lipat == 0 ) {
			
				echo 'Kelipatan nilai ' . $lipat . ' dari nilai ' . $nilai . ' adalah ' . $i . '<br>';
			}
		} 
	}
?>
</form>

</body>
</html>