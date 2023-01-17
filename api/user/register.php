<?php

include '../../pages/examples/koneksi.php';

$username   = $_POST['username'];
$name       = $_POST['name'];
$password   = md5($_POST['password']);
$role       = 'user';

$sql_check  = "SELECT * FROM user WHERE username = '$username'";

$result_check = $koneksi->query($sql_check);

if ($result_check->num_rows > 0) {
    echo json_encode(array(
        'message'   => 'Username sudah terdaftar!',
        'success'   => false,
    ));
} else {
    $sql = "INSERT INTO user SET
            username    = '$username',
            name        = '$name',
            password    = '$password',
            role        = '$role'
            ";

    $result = $koneksi->query($sql);

    if ($result) {
        echo json_encode(array(
            'message'   => 'Register Berhasil',
            'success'   => true,
        ));
    } else {
        echo json_encode(array(
            'message'   => 'Gagal!',
            'success'   => false
        ));
    }
}