<?php
    include "../koneksi.php";

    $nama = $_POST['nama'];
    $kategori = $_POST['kategori'];
    $stok = $_POST['stok'];
    $desc = $_POST['desc'];
    $harga = $_POST['harga'];
    $img = $_POST['img'];

    $query = mysqli_query($mysqli, "INSERT INTO `produk`(`id`, `nama`, `kategori`, `stok`, `harga`, `desc`, `img`) VALUES (NULL,'$nama','$kategori','$stok','$harga','$desc','$img')");

    if (mysqli_query($mysqli, $query)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($mysqli);
    }
    header('Location: produk.php');
    exit();
?>