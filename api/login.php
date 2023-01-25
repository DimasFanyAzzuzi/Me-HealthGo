<?php

include '../pages/examples/koneksi.php';

header('Content-type:application/json;charset=utf-8');

$username   = $_POST['username'];
$password   = md5($_POST['password']);

$sql    = "SELECT * FROM user WHERE 
        username = '$username' AND password = '$password'
        ";

$result = $koneksi->query($sql);

if ($result->num_rows > 0) {
    $user = array();
    while ($row = $result->fetch_assoc()) {
        $user[] = $row;
    }
    echo json_encode(array(
        'message'   => 'Berhasil',
        'success'   => true,
        'data'      => $user[0]  
    ));
} else {
    echo json_encode(array(
        'message'   => 'Gagal!',
        'success'   => false
    ));
}
