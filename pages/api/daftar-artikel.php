<?php

include '../examples/koneksi.php';

header('Content-type:application/json;charset=utf-8');

$sql    = "SELECT * FROM artikel";

$result = $koneksi->query($sql);

if ($result->num_rows > 0) {
    $artikel = array();
    while ($row = $result->fetch_assoc()) {
        $sql_gambar = "SELECT * FROM gambar_artikel WHERE id_artikel =" . $row['id_artikel'] . ";";
        $result_gambar = $koneksi->query($sql_gambar);
        $array_gambar = array();
        while ($gambar = $result_gambar->fetch_assoc()) {
            $array_gambar[] = array(
                'nama_gambar' => "/assets/img/img-artikel/" . $gambar['nama_gambar']
            );
        }

        $artikel[] = array(
            'id_artikel'    => $row['id_artikel'],
            'id_kategori'   => $row['id_kategori'],
            'judul'         => $row['judul'],
            'deskripsi'     => $row['deskripsi'],
            'gambar'        => $array_gambar,
            'thumbnail'     => $array_gambar[0],
            'created_at'    => $row['created_at']
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
