
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tugas 2 | Feri Irawan</title>
        <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap"); 
    * {
        position: relative;
        font-size: 14px;
        color: #666;
        }

        body,
        input {
        font-family: "Poppins", sans-serif;
        }
        h1 {
        margin: 0 0 20px;
        font-weight: 400;
        color: #1c87c9;
        }
        form {
        padding: 25px;
        margin: 25px;
        box-shadow: 0 2px 5px #f5f5f5; 
        background: #f5f5f5; 
        }
        button {
        padding: 10px;
        border: none;
        background: #1c87c9; 
        font-size: 16px;
        font-weight: 400;
        color: #fff;
        }
        button:hover {
        background: #2371a0;
        }  
</style>  
</head>
<body>
<form action="" method="POST">
        <h1>PROGRAM MENAMPILKAN NILAI AKHIR DAN GRADE MAHASISWA</h1>
        <div class="info">
                Nama Mahasiswa : <br>
                <input type="text" name="nama" placeholder="Masukan Nama"><br>
                NIM Mahasiswa :<br>
                <input type="text" name="nim" placeholder="Masukan NIM"><br>
                Mata Kuliah : <br>
                <input type="text" name="matkul" placeholder="Masukan Mata Kuliah"><br>
                Jumlah Kehadiran : <br>
                <input type="text" name="jk" placeholder="Masukan Jumlah Kehadiran"><br>
                Jumlah Pertemuan : <br>
                <input type="text" name="jp" placeholder="Masukan Jumlah Pertemuan"><br>
                Nilai Tugas : <br>
                <input type="text" name="tugas" placeholder="Masukan Nilai Tugas"><br>
                Nilai UTS : <br>
                <input type="text" name="uts" placeholder="Masukan Nilai UTS"><br>
                Nilai UAS : <br>
                <input type="text" name="uas" placeholder="Masukan Nilai UAS"><br>
                <br>
        <button type="submit" name="submit" value="submit">SEND!</button>
        </div>

</form>
</body>
</html>