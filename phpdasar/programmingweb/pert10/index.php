<?php
$db_host = 'localhost'; // Nama Server
$db_user = 'root'; // User Server
$db_pass = ''; // Password Server
$db_name = 'lat_dbase'; // Nama Database

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
    die ('Gagal terhubung MySQL: ' . mysqli_connect_error());
} 
$sql = 'SELECT Nim, FirstName, LastName, Job_date, Age 
		FROM tblmhs';
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}

echo '<table border="1" cellpadding="10" cellspacing="0" >
		<thead>
			<tr>
				<th>NIM</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Job_date</th>
				<th>Age</th>
			</tr>
		</thead>
		<tbody>';
		
while ($row = mysqli_fetch_assoc($query))
{
	echo '<tr>
			<td>'.$row['Nim'].'</td>
			<td>'.$row['FirstName'].'</td>
			<td>'.$row['LastName'].'</td>
			<td>'.$row['Job_date'].'</td>
			<td class="right">'.$row['Age'].'</td>
		</tr>';
}
echo '
	</tbody>
</table>';

// Apakah kita perlu menjalankan fungsi mysqli_free_result() YA, jika query kita menghasilkan data yang sangat besar
mysqli_free_result($query);

// Apakah kita perlu menjalankan fungsi mysqli_close() Fungsi ini berfungsi untuk menutup koneksi MySQL
mysqli_close($conn);