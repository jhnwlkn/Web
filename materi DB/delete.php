<?php
include "koneksi.php";
$id= $_GET['id'];
$delete = mysqli_query($mysqli, "DELETE FROM mahasiswa WHERE id='$id'");

if ($delete) {
	header('Location:home.php');
}