<!DOCTYPE html>

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Tambah Data</title>
</head>

<Body>
    <form action="tambah_exe.php" method="POST">
        <label for="fname">Nama:</label><br>
        <input type="text" name="nama"><br>
        <label for="lname">NPM:</label><br>
        <input type="text" name="npm"><br>
        <label for="lname">Alamat:</label><br>
        <input type="text" name="alamat"><br>
        <label for="lname">No Sepatu:</label><br>
        <input type="text" name="no_spt"><br><br>
        <input type="submit" value="tambah">
    </form>
</Body>

</html>