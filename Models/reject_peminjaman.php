<?php 
// koneksi database
include 'config.php';

// menangkap data yang di kirim dari form
$id = $_GET['id'];
 
// menginput data ke database
mysqli_query($mysqli,"update peminjaman set approval=2 where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:../Pages/Admin/v_data_approval_peminjaman.php");
 
?>