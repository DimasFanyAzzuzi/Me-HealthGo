<?php

include '../pages/examples/koneksi.php';

// $sql    = "SELECT * FROM artikel";

$sql = "SELECT * FROM konsultan";

$result = $koneksi->query($sql);

if ($result->num_rows > 0) {
    $artikel = array();
    while ($row = $result->fetch_assoc()) {
        $artikel[] = $row;
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