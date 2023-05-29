<?php
include "koneksi.php";
$nama = $_POST['nama'];
$npm = $_POST['npm'];
$alamat = $_POST['alamat'];
$no = $_POST['no_spt'];
$sql = "INSERT INTO mahasiswa (id, nama, npm, alamat, nomor_sepatu) VALUES(NULL, '$nama', '$npm', '$alamat', '$no')";

if (mysqli_query($mysqli, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
}
header('Location: home.php');
exit();
