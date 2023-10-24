<?php

    include 'koneksi.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    $login = mysqli_query($koneksi,"select * from admin where username = '$username' and password = '$password'");
    $cek = mysqli_num_rows($login);

    if($cek> 0){

        $data = mysqli_fetch_assoc($login);

        if ($data['username'] == "$username" && $data['password'] == "$password") {
            header('location:index.html');
        }
    }
?>