<?php 
// koneksi database
include 'config.php';
 
// menangkap data yang di kirim dari form
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$level = $_POST['level'];
 
// menginput data ke database
mysqli_query($mysqli,"insert into users values('','$first_name','$last_name','$email','$password','$level')");
 
// mengalihkan halaman kembali ke index.php
header("location:../Pages/Admin/v_data_users.php");
 
?>