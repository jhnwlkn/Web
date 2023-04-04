<?php
include "koneksi.php";
session_start();
if ($_SESSION['status'] != "login") {
    header("location:index.php");
}
$query_mysql = mysqli_query($mysqli, "SELECT * FROM mahasiswa");
$nomor = 1;
echo "<a href='tambah.php'>Tambah</a><br><br><br>";
?>
<style>
    th, td {
        padding: 10px;
        text-align: left;
    }
</style>


<table border = 1>
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
                <td><a href="edit.php?id=<?=$data['id'];?>">Update</a></td>
                <td><a href="delete.php?id=<?=$data['id'];?>"  onclick="return konfirmasiHapus();">Delete</a></td>
            </tr>
            <?php
        }
        ?>
    
</table>


<br>
<br>
<a href="logout.php">LOGOUT</a>

<script>
  function konfirmasiHapus() {
    if (confirm("Apakah Anda yakin ingin menghapus data ini?")) {
      return true;
    } else {
      return false;
    }
  }
</script>