<?php
    include('koneksi.php');
    $kode1 = $_POST['kode'];
    $nama_produk1 = $_POST['nama_produk'];
    $harga1 = $_POST['harga'];
    $satuan1 = $_POST['satuan'];
    $kategori1 = $_POST['kategori'];
    $url = $_POST['url'];
    $stok1 = $_POST['stok_awal'];
    
    $result = $koneksi->exec("INSERT INTO `belajar_crud` (`kode_produk`, `nama_produk`, `harga_produk`, `satuan`, `kategori`, `url_gambar`, `stok_awal`) 
    VALUES('$kode1', '$nama_produk1', '$harga1', '$satuan1', '$kategori1', '$url', '$stok1');");
   


if ($result ==TRUE) {
    # code...
    echo 'data berhasil di Input';
    header("location:aplikasi_crud.php?alert=data di input");
} else {
    echo 'data gagal disimpan';
}
?>
