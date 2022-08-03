<?php 
// koneksi database
include 'config.php';

// menangkap data yang di kirim dari form
$id = $_GET['id'];
 
// menginput data ke databasea
mysqli_query($mysqli,"update peminjaman set approval=1 where id='$id'");

$data = mysqli_query($mysqli,"SELECT p.id_barang as id, p.stok as stok_peminjam, b.stok as stok_barang FROM peminjaman p JOIN barang b ON p.id_barang = b.id WHERE p.id = '$id'");
while($s = mysqli_fetch_array($data)){
    $stok_barang = $s['stok_barang'];
    $stok_peminjaman = $s['stok_peminjam'] ;
    $result_stok = $stok_barang - $stok_peminjaman;
    $id_barang = $s['id'];
    mysqli_query($mysqli,"update barang set stok='$result_stok' where id='$id_barang'");
}
 
// mengalihkan halaman kembali ke index.php
header("location:../Pages/Admin/v_data_approval_peminjaman.php");
 
?>