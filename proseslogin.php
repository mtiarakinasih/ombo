<?php 
session_start(); //memulai sesi 
include ('config/connect.php'); //mengarahkan ke file connect.php
$username = $_POST['username']; //input username
$password = $_POST['password']; //input password
 
$query = mysqli_query($is_connect, "SELECT * from users WHERE username = '".$username."' AND password ='".$password."'"); //menajalankan query
$data = mysqli_fetch_assoc($query); //mysqli_fetch_assoc untuk menyimpan query yang dijalakan 
 
if (NULL != $data){ //apakah datanya ada
    $_SESSION['id'] = $data['id']; //pembuatan sesi 
    $_SESSION['username'] = $username; //pembuatan session 
    header('Location: index.php'); //proses meredirect ke halaman lain 
} else { 
    echo  "<script type='text/javascript'>alert('Login gagal! Username atau password salah'); window.location.href='login.php';</script>";
} 
 
?>
