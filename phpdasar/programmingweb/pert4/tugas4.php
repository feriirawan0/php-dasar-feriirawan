
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 4 | Feri Irawan</title>
    <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap");
        * {
        position: relative;
        }

        body,
        input {
        font-family: "Poppins", sans-serif;
        padding:0px;
        margin:0px;
        }
        label{
            position: relative;
            margin: 0 70px;
            font-size: 1em;
            color: #0013f0;
            text-de
            coration: none;
        }
        #form{
        background-color:#ccc3f5;
        width:400px;
        margin:15em auto 0 auto;
        }
    </style>
</head>
<body>
<form id="form" action="proses4.php" method="POST">
<table>
            <tr>
                <td colspan="3" align="center">
                    <h1>Kelipatan</h1>
                </td>
            </tr>

            <tr>            
                <td>Bilangan Awal</td>
                <td>:</td>
                <td><input name="bil1" type="text" value="" placeholder="Bilangan Awal" >
                </td>
            </tr>
            <tr>            
                <td>Bilangan Akhir</td>
                <td>:</td>
                <td><input name="bil2" type="text" value="" placeholder="Bilangan Akhir">
                </td>
            </tr>
            <tr>            
                <td>Kelipatan</td>
                <td>:</td>
                <td><input name="bil3" type="text" value="" placeholder="Kelipatan">
                </td>
            </tr>

            <tr>
                <td colspan="3" align="center">
                <button type="submit" name="submit" value="proses">SEND!</button>
                </td>
            </tr>
        </table>
</form>
</body>
</html>