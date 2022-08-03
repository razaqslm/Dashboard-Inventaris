<?php 
// koneksi database
include 'config.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$id_barang = $_POST['id_barang'];
$nama_peminjam = $_POST['nama_peminjam'];
$stok = $_POST['stok'];
$approval = 0;

// update data ke database
mysqli_query($mysqli,"update peminjaman set id_barang='$id_barang', nama_peminjam='$nama_peminjam', stok='$stok'where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:../Pages/User/v_history.php");
 
?>

