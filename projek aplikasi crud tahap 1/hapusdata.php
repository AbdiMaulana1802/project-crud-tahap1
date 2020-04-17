<?php
    include('koneksi.php');

    $kunci = $_GET['kunci'];
    $hasil = $koneksi->query("DELETE FROM `belajar_crud` WHERE `belajar_crud`.`kode_produk` = '$kunci'");

    if ($hasil==TRUE) {
        # code...
        header("location:aplikasi_crud.php?info=data berhasil dihapus");
    } else {
        echo 'data gagal dihapus';
    }
?>