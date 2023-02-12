<?php

include '../examples/koneksi.php';

header('Content-type:application/json;charset=utf-8');

$username       = $_POST['username'];
$name           = $_POST['name'];
$password       = md5($_POST['password']);
$asal_sekolah   = $_POST['asal_sekolah'];
$role           = 'user';

$sql_check  = "SELECT * FROM user WHERE username = '$username'";

$result_check = $koneksi->query($sql_check);

if ($username == "" || $name == "" || $password == "") {
    echo json_encode(array(
        'message'   => 'Gagal! Field tidak diisi',
        'success'   => false
    ));
} else if ($result_check->num_rows > 0) {
    echo json_encode(array(
        'message'   => 'Username sudah terdaftar!',
        'success'   => false,
    ));
} else {
    $sql = "INSERT INTO user SET
            username        = '$username',
            name            = '$name',
            password        = '$password',
            asal_sekolah    = '$asal_sekolah',
            role            = '$role'
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
