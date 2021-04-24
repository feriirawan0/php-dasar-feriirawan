<!-- dalam script yang saya buat diandaikan login diabaikan dahulu.. karena saya fokus ke konsep session nya. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<!-- dlm ke-tiga script masing-masing halaman tujuan, username akan ditampilakan dalam satu login. -->
<!-- bila menuju kehalaman-halaman tersebut munculkan username tersebut -->
<div class="container mt-5">
    <form method="post" action="submit.php">
    <table><tr>
    <td>Usename </td>
    <td><input type=text name="username"></td>
    </tr><tr>
    <td>Password </td>
    <td><input type="password" name="password"></td>
    </tr><tr>
    <td><input type="submit" name="submit" value="Submit"></td>
    </tr>
    </table>
    </form>
</div>
</body>
</html>