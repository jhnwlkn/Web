<?php
    session_start();
    include "koneksi.php";

    $username = $_POST['user'];
    $password = $_POST['pass'];

    $query = mysqli_query($mysqli, "SELECT * FROM users where username='$username' and password='$password'");

    $cek = mysqli_num_rows($query);

    if ($cek > 0) {
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "login";
        header("location:admin/index.php");
    } else {
        header("location:login.php");
    }
?>