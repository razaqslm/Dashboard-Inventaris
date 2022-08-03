<?php 
// koneksi database
include 'config.php';
 
date_default_timezone_set('Asia/Jakarta');

// menangkap data yang di kirim dari form
$id_barang = $_POST['id_barang'];
$tanggal_peminjaman =  date("Y/m/d");
$nama_peminjam = $_POST['nama_peminjam'];
$stok = $_POST['stok'];
$approval = 0;
 
$data = mysqli_query($mysqli,"SELECT * FROM barang WHERE id = '$id_barang'");
$results = mysqli_fetch_array($data, MYSQLI_ASSOC);
    if($stok > $results['stok']){
        header("location:../Pages/User/v_form_peminjaman.php?pesan=error");
    }else{
        mysqli_query($mysqli,"insert into peminjaman values('','$id_barang','$tanggal_peminjaman','$nama_peminjam','$stok','$approval')");
        header("location:../Pages/User/v_history.php");
    }

    


 
?>