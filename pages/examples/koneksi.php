<?php 
$server		= "https://629f-2001-448a-5122-d77a-28cb-a618-52fe-2421.ap.ngrok.io/";
$username	= "root";
$password	= "";
$db			= "mehealthgo";
$koneksi = mysqli_connect($server, $username, $password,$db);

if (mysqli_connect_errno()) {
	echo "koneksi gagal : ".mysqli_connect_error();
}
 ?>