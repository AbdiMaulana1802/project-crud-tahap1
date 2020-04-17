<?php 
    include('koneksi.php');
    $kode1 = $_POST['kode'];
    $nama_produk1 = $_POST['nama_produk'];
    $harga1 = $_POST['harga'];
    $satuan1 = $_POST['satuan'];
    $kategori1 = $_POST['kategori'];
    $url1 = $_POST['url'];
    $stok = $_POST['stok'];
    // print_r($_POST);

    $hasil = $koneksi->exec("UPDATE `belajar_crud` SET `nama_produk` = '$nama_produk1', `harga_produk` = '$harga1', `satuan` = '$satuan1', `kategori` = '$kategori1', `url_gambar` = '$url1', `stok_awal` = '$stok' WHERE `belajar_crud`.`kode_produk` = '$kode1';
    ");
    // echo $hasil;

    if ($hasil==TRUE) {
        # code...
        echo 'data berhasil diedit';
        header("location:aplikasi_crud.php?info=data berhasil diedit");
    } else {
        echo 'data gagal di edit';
    }

?>