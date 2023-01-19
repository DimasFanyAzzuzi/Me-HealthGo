<?php

include '../../pages/examples/koneksi.php';

// $sql    = "SELECT * FROM artikel";

$sql = "SELECT artikel.*, gambar_artikel.* FROM artikel INNER JOIN gambar_artikel ON artikel.id_artikel = gambar_artikel.id_artikel";

// $sql_new = "SELECT gambar_artikel.*, artikel.judul FROM gambar_artikel INNER JOIN artikel ON gambar_artikel.id_artikel = artikel.id_artikel";

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