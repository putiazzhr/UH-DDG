<?php 
//Memulai session
session_start();

//Koneksi ke database
$koneksi = new mysqli('localhost','root','','db_ddg');
if (!$koneksi) {
   echo 'Tidak bisa melakukan koneksi'; 
}

//Mendapatkan variabel $_POST dari form
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$aksi = $_POST['aksi'];

//Jika aksi nya adalah login
if ($aksi === 'register') {
    $sql = "INSERT INTO userddg(`username`,`email`,`password`) VALUES ('$username','$email','$password')";
    $login = $koneksi->query($sql);
    if($login) {
        header("Location: login.php");
        exit();
    } else {
        header("Location: register.php");
        exit();
    }
} elseif($aksi === 'login') {
    $sql = "SELECT * FROM userddg WHERE `email` = '$email' && `password` = '$password'";
    $login = $koneksi->query($sql);
    if($login) {
        $_SESSION['data'] = $login->fetch_assoc();
        header("Location: dashboard.php");
        exit();
    } else {
        header("Location: login.php");
        exit();
    }
} elseif($aksi === 'logout') {
    header('Location: logout.php');
}
?>