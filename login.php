<?php
    session_start();
    include "koneksi.php";
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysql_query("select *from admin where username='$username' and password='$password'");
    $cocok = mysql_num_rows($query);
    if($cocok > 0){
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        header("location: tampil.php");
    }
    else{
        echo "<script> alert('Username atau Password salah !') </script>";
    }

?>