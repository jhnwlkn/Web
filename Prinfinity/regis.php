<?php

    include "koneksi.php";
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $sql = "INSERT INTO users (id, username, password) VALUES(NULL, '$email', '$password')";

    if (mysqli_query($mysqli, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
    }
    header('Location: login.php');
    exit();

?>
