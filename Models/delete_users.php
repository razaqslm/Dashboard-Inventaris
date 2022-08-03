<?php 
// koneksi database
include 'config.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
 
 
// menghapus data dari database
mysqli_query($mysqli,"delete from users where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:../Pages/Admin/v_data_users.php");
 
?>