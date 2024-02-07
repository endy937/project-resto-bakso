<?php 
// koneksi database
include 'koneksi.php';

$pilihan_menu = $_POST['pilihan_menu'];
$nama = $_POST['nama'];
$jml = $_POST['jml'];
$no_meja = $_POST['no_meja'];

// menginput data ke database
mysqli_query($koneksi,"insert into pesanan values('','$pilihan_menu','$nama','$jml','$no_meja')");

// mengalihkan halaman kembali ke index.php
header("location:index.php");

?>