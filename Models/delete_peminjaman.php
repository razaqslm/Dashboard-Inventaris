<?php 
// koneksi database
include 'config.php';

// menangkap data yang di kirim dari form
$id = $_GET['id'];


mysqli_query($mysqli,"delete from peminjaman where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:../Pages/User/v_history.php");
 
?>