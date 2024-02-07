<?php 
//kode koneksi
//nama pariable di awal dengan simbol $
//kode koneksi ke database mysqli_connect()
//root username xampp
//"" password

$koneksi = mysqli_connect("localhost","root","","multi_user");

// Check connection
if ($koneksi){

	echo "Koneksi berhasil";
	}else{
	echo "koneksi gagal"; 
}

?>