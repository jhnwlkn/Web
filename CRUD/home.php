<?php
include "koneksi.php";
$query_mysql = mysqli_query($mysqli, "SELECT * FROM mahasiswa");
$nomor = 1;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <a href="tambah.php" class="btn-add">Tambah</a>
    
    <table class="table">
        <tr>
            <th>Nomor</th>
            <th>Nama</th>
            <th>NPM</th>
            <th>Alamat</th>
            <th>Nomer Sepatu</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        <?php
        while ($data = mysqli_fetch_array($query_mysql)) {
        ?>
            <tr>
                <td><?php echo $nomor++; ?></td>
                <td><?php echo $data['nama']; ?></td>
                <td><?php echo $data['npm']; ?></td>
                <td><?php echo $data['alamat']; ?></td>
                <td><?php echo $data['nomor_sepatu']; ?></td>
                <td><a href="edit.php?id=<?=$data['id'];?>" class="btn-edit">Update</a></td>
                <td><a href="delete.php?id=<?=$data['id'];?>" onclick="return konfirmasiHapus();" class="btn-delete">Delete</a></td>
            </tr>
        <?php
        }
        ?>
    </table>

    <a href="logout.php" class="btn-logout">LOGOUT</a>

    <script>
        function konfirmasiHapus() {
            if (confirm("Apakah Anda yakin ingin menghapus data ini?")) {
                return true;
            } else {
                return false;
            }
        }
    </script>
</body>
</html>
