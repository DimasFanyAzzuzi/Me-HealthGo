<?php 
$server		= "153.92.10.74";
$username	= "mehe1894_me-health-go";
$password	= "me-health-go";
$db			= "mehe1894_mehealthgo";
$koneksi = mysqli_connect($server, $username, $password,$db);

if (mysqli_connect_errno()) {
	echo "koneksi gagal : ".mysqli_connect_error();
}
