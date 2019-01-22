<?php 

$server = 'localhost';
$username = 'root';
$password = '';
$database = 'bootcamp';

$koneksi = mysqli_connect($server,$username,$password,$database);

if(!$koneksi){

	echo "Gagal koneksi".mysqli_error();
}


 ?>