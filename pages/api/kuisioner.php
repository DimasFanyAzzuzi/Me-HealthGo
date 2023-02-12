<?php

include '../examples/koneksi.php';

header('Content-type:application/json;charset=utf-8');

$sql = "SELECT * FROM kuisioner";

$result = $koneksi->query($sql);

if ($result->num_rows > 0) {
    $kuisioner = array();
    while ($row = $result->fetch_assoc()) {
        $kuisioner[] = array(
            'id_kuisioner'    => $row['id_kuisioner'],
            'nomor'        => $row['nomor'],
            'pertanyaan'   => $row['pertanyaan']
        );
    }
    echo json_encode(array(
        'message'   => 'Berhasil',
        'success'   => true,
        'data'      => $kuisioner
    ));
} else {
    echo json_encode(array(
        'message'   => 'Gagal!',
        'success'   => false
    ));
}
