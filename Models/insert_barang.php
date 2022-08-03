<?php 
// koneksi database
include 'config.php';
 
// menangkap data yang di kirim dari form
$nama_barang = $_POST['nama_barang'];
$status_barang = $_POST['status_barang'];
$merk = $_POST['merk'];
$stok = $_POST['kondstokisi'];
$ukuran = $_POST['ukuran'];
 
// menginput data ke database
mysqli_query($mysqli,"insert into barang values('','$nama_barang','$status_barang','$merk','$stok','$ukuran')");
 
// mengalihkan halaman kembali ke index.php
header("location:../Pages/Admin/v_data_barang.php");
 
?>