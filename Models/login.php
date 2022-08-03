<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'config.php';
 
// menangkap data yang dikirim dari form
$email = $_POST['email'];
$password = $_POST['password'];
 
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($mysqli,"select * from users where email='$email' and password='$password'");
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
$results = mysqli_fetch_array($data, MYSQLI_ASSOC);
 
if($cek > 0){
	if($results['level']=="Admin"){
		$_SESSION['name'] = $results['first_name'] .' '. $results['last_name'];
		$_SESSION['status'] = "login";
		$_SESSION['level'] = "Admin";
		header("location:../Pages/Admin/v_home.php");
	}else if($results['level']=="User"){
		$_SESSION['name'] = $results['first_name'] .' '. $results['last_name'];
		$_SESSION['status'] = "login";
		$_SESSION['level'] = "User";
		header("location:../Pages/User/v_home.php");
	}else{
		header("location:../Pages/v_login.php?pesan=gagal");
	}
}else{
	header("location:../Pages/v_login.php?pesan=gagal");
}

?>