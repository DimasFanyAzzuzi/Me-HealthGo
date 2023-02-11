<?php

include '../pages/examples/koneksi.php';

header('Content-type:application/json;charset=utf-8');

$id_user        = $_POST['id_user'];
$detail_jawaban = $_POST['detail_jawaban'];
$nilai          = $_POST['nilai'];
$hasil          = $_POST['hasil'];

$sql = "INSERT INTO jawaban SET
        id_user        = '$id_user',
        detail_jawaban = '$detail_jawaban',
        nilai          = '$nilai',
        hasil          = '$hasil'
        ";

$result = $koneksi->query($sql);

if ($result) {
    echo json_encode(array(
        'message'   => 'Jawaban Berhasil Disimpan',
        'success'   => true,
    ));
} else {
    echo json_encode(array(
        'message'   => 'Gagal!',
        'success'   => false
    ));
}
