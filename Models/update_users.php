<?php 
// koneksi database
include 'config.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$level = $_POST['level'];

// update data ke database
mysqli_query($mysqli,"update users set first_name='$first_name', last_name='$last_name', email='$email', password='$password', level='$level' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:../Pages/Admin/v_data_users.php");
 
?>