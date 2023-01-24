<?php

include '../pages/examples/koneksi.php';

$sql    = "SELECT * FROM artikel";

// $sql = "SELECT artikel.*, gambar_artikel.nama_gambar FROM artikel, gambar_artikel WHERE artikel.id_artikel = gambar_artikel.id_artikel";

// $sql_new = "SELECT gambar_artikel.*, artikel.judul FROM gambar_artikel INNER JOIN artikel ON gambar_artikel.id_artikel = artikel.id_artikel";

$result = $koneksi->query($sql);

if ($result->num_rows > 0) {
    $artikel = array();
    while ($row = $result->fetch_assoc()) {
        $sql_gambar = "SELECT * FROM gambar_artikel WHERE id_artikel =".$row['id_artikel'].";";
        $result_gambar = $koneksi->query($sql_gambar);
        $array_gambar = array();
        while($gambar = $result_gambar->fetch_assoc()){
            $array_gambar[] = array(
                'nama_gambar' => $gambar['nama_gambar']
            );
        }

        $artikel[] = array(
            'id_artikel' => $row['id_artikel'],
            'id_kategori' => $row['id_kategori'],
            'judul' => $row['judul'],
            'deskripsi' => $row['deskripsi'],
            'gambar' => $array_gambar
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