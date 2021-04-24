<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">    
    <title>Tugas 3</title>
</head>
<body>
    <div class="container m-auto" style="width: 500px;">
        <h2 >Array 2 Dimensi</h2>
        <P>Feri Irawan | 171011400587</p>
    <table class="table mt-3 text-center">
        <thead class="thead-dark">
            <tr>
                <th>Nama</th>
                <th>Jurusan</th>
                <th>Jenis Kelamin</th>
                <th>Usia</th>
            </tr>
            <?php
        $mahasiswa = array(
                array("Aldi", "Teknik Informatika", "Laki-laki",23),
                array("Anggun", "Sistem Informasi", "Perempuan", 22),
                array("Diki", "Manajemen Informatika", "Laki-laki",24),
                array("Nurul", "Teknik Komputer", "Perempuan", 20),
                array("Karna", "Teknik Informatika", "Laki-laki", 24)
                );
                    
            for ($row = 0; $row < 5; $row++) {
                echo "<tr >";
                for ($col = 0; $col < 4; $col++) {
                    echo "<td class='bg-warning'>".$mahasiswa[$row][$col]."</td>";
                }
            echo "</tr>";
}
?>
        </thead>
        <tbody>
        </tbody>
    </table>
    </div>
    <div class="container m-auto" style="width: 500px;">
    <p>Disni saya mempunyai data mahasiswa dengan kolom nama, jurusan, jenis kelamin dan usia. saya akan membuat kurang lebih 5 data mahasiswa. Dari kasus tersebut berarti saya mempunyai array dengan bentuk 5 baris dan 4 kolom.</p>
    <p>Apabila kita membuat kolom ke 0 adalah nama mahasiswa, kolom ke 1 adalah jurusan, kolom ke 2 adalah jenis kelamin dan kolom ke 3 merupakan umur. Dengan nilai yang di inisialisasi seperti berikut:</p>
    <pre>
    $mahasiswa = array(
                array("Aldi", "Teknik Informatika", "Laki-laki",23),
                array("Anggun", "Sistem Informasi", "Perempuan", 22),
                array("Diki", "Manajemen Informatika", "Laki-laki",24),
                array("Nurul", "Teknik Komputer", "Perempuan", 20),
                array("Karna", "Teknik Informatika", "Laki-laki", 24)
                );
    </pre>
    <p>Dari inisialisasi diatas dapat dikatakan telah membuat space di memori sebayak 20 tempat. Masing-masing nilai akan di isi pada tempatnya masing-masing mulai dari array baris index ke 0 dan kolom ke 0 sampai pada baris ke 4 dengan kolom 3.</p>
    <p>Apabila nilai array dari mahasiswa isi kedalam bentuk array, maka setiap data mahasiswa akan menempati posisi seperti pada contoh yang saya buat diatas.</p>
    </div>
</body>
</html>