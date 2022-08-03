<?php 
// koneksi database
include 'config.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id_peminjaman'];


// update data ke database
mysqli_query($mysqli,"update peminjaman set approval = 3 where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:../Pages/User/v_history.php");
 
?>

