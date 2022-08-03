<?php 
// koneksi database
include 'config.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama_barang = $_POST['nama_barang'];
$status_barang = $_POST['status_barang'];
$merk = $_POST['merk'];
$stok = $_POST['stok'];
$ukuran = $_POST['ukuran'];

// update data ke database
mysqli_query($mysqli,"update barang set nama_barang='$nama_barang', status_barang='$status_barang', merk='$merk', stok='$stok', ukuran='$ukuran' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:../Pages/Admin/v_data_barang.php");
 
?>