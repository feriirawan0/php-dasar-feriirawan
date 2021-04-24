<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<style type="text/css">
		table {
			width: 100%;
		}
		table, th, td {
			border: 1px solid black;
		}
	</style>
</head>
<body>
	<center><h1>PERHITUNGAN BIAYA DAN PENDAPATAN SEKOLAH</h1></center>
	<?php include("conn.php"); ?>
	<form action="" method="POST">
		Nama Sekolah : <input type="text" name="sekolah" \><br>
		Jumlah Siswa : <input type="text" name="siswa" \><br>
		Paket : <select name="paket">
			<option value="Pilih Paket">Pilih Paket</option>
			<option value="Full Package">Full Package</option>
			<option value="Semi Full">Semi Full</option>
			<option value="Konsultasi">Konsultasi</option>
		</select><br>
		Jumlah Pembayaran : <input type="radio" name="bulan" value="10" \>10 Bulan <input type="radio" name="bulan" value="11" \>11 Bulan <input type="radio" name="bulan" value="12" \>12 Bulan<br>
		<input type="submit" name="Submit" value="Submit" \>
	</form><br><br><br>
	<?php
		if (isset($_POST['Submit'])) {
			$sekolah = $_POST['sekolah'];
			$siswa = $_POST['siswa'];
			$paket = $_POST['paket'];
			$bulan = $_POST['bulan'];
			$hardware = 120000000;
			$guru = 3000000;

			$entertain = $siswa * 2000;
			$pendapatan = $hardware * $guru * 13 + $entertain;
			$iuran = $pendapatan / ($bulan * $siswa);

			$sql = "INSERT INTO sekolah (namaSekolah, jumlahSiswa, paket, biayaGuru, biayaEntertain, jumlahPembayaran, iuranSiswa) VALUES ('$sekolah', '$siswa', '$paket', '$guru', '$entertain', '$bulan', '$iuran')";

			if ($conn->query($sql) === TRUE) {
				echo "New record created successfully<br>";
			} else {
				echo "Error: " . $sql . "<br>" . $conn->error;
			}
		}
		
	?>
	<?php
		$query = "SELECT * FROM sekolah";
		if ($result = mysqli_query($conn, $query)) {
			if (mysqli_num_rows($result) > 0) {
				echo "<table>";
					echo "<tr>";
						echo "<th>No</th>";
						echo "<th>Nama Sekolah</th>";
						echo "<th>Jumlah Siswa</th>";
						echo "<th>Paket</th>";
						echo "<th>Biaya Guru</th>";
						echo "<th>Biaya Entertain</th>";
						echo "<th>Jumlah Pembayaran</th>";
						echo "<th>Iuran Siswa/Bulan</th>";
					echo "</tr>";

					while ($row = mysqli_fetch_array($result)) {
						echo "<tr>";
							echo "<td>". $row['no'] . "</td>";
							echo "<td>". $row['namaSekolah'] . "</td>";
							echo "<td>". $row['jumlahSiswa'] . "</td>";
							echo "<td>". $row['paket'] . "</td>";
							echo "<td>". $row['biayaGuru'] . "</td>";
							echo "<td>". $row['biayaEntertain'] . "</td>";
							echo "<td>". $row['jumlahPembayaran'] . "</td>";
							echo "<td>". $row['iuranSiswa'] . "</td>";
						echo "</tr>";
					}
				echo "</table><br>";
				
				mysqli_free_result($result);	
			}
		}		
	?>
	<br>
	Rata-Rata Iuran Siswa/Bulan : <br>
	Total Siswa Seluruhnya : <br>
	Total Pendapatan : <br>
	Jumlah Sekolah Full : Sekolah<br>
	Jumlah Sekolah Semi Full : Sekolah<br>
	Jumlah Sekolah Konsultasi : Sekolah<br>
</body>
</html>