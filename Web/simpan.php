<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$id_karyawan    = $_POST['id_karyawan'];
$nama_karyawan  = $_POST['nama_karyawan'];
$username       = $_POST['username'];
$password  		= $_POST['password'];
$level         	= $_POST['level'];
// query SQL untuk insert data
$query = "INSERT INTO tabel_pengguna SET id_karyawan = '$id_karyawan', nama_karyawan = '$nama_karyawan', username = '$username', password = '$password', level = '$level'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header("location:index.php");
?>