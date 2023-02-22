<?php

include '../pages/examples/koneksi.php';

header('Content-type:application/json;charset=utf-8');

$sql = "SELECT * FROM konsultan";

$result = $koneksi->query($sql);

if ($result->num_rows > 0) {
    $artikel = array();
    while ($row = $result->fetch_assoc()) {
        $artikel[] = array(
            'id_konsultan'  => $row['id_konsultan'],
            'nama'          => $row['nama'],
            'noHp'          => $row['noHp'],
            'pekerjaan'     => $row['pekerjaan'],
            'alamat'        => $row['alamat'],
            'imageUrl'      => '/assets/img/img-kons/'.$row['imageUrl']
        );
    }
    echo json_encode(array(
        'message'   => 'Berhasil',
        'success'   => true,
        'data'      => $artikel 
    ));
} else {
    echo json_encode(array(
        'message'   => 'Gagal!',
        'success'   => false
    ));
}