<?php
    include("koneksi.php");
    $hasil = $koneksi->query("SELECT * FROM `belajar_crud`");
    $nomor = 1;
    if (isset($_GET['info'])) {
        # code...
        echo $_GET['info'];
    }
?>

<table border="1" cellpadding="10" cellspacing="0" style="margin: 50px auto;text-align: center">
    <tr style="background: silver">
    <th>No</th><th>kode Produk</th><th>Nama produk</th><th>Harga Produk</th><th>Satuan</th><th>Kategori</th><th>url gambar</th><th>Stok Awal</th><th>Action</th>
    </tr>
    <?php foreach ($hasil as $h) {?>

    <tr>
            <td><?php echo $nomor++; ?></td>
            <td><?php echo $h['kode_produk'];?></td>
            <td><?php echo $h['nama_produk'];?></td>
            <td><?php echo $h['harga_produk'];?></td>
            <td><?php echo $h['satuan'];?></td>s
            <td><?php echo $h['kategori'];?></td>

            <td><img src="<?php echo $h['url_gambar'];?>" width="100px"></td>
            <?php $stok = $h['stok_awal']; echo ($h['stok_awal'] < 5) ? "<td style='background:red; color:#fff'>$stok</td>" : "<td>$stok</td>"; ?>
            <td>
                <button style="background-color: black;"><a href="hapusdata.php?kunci=<?php echo $h['kode_produk'];?>" style="text-decoration: none;color: white">Hapus Data</a></button><br><br>
                <button style="background-color: black"><a href="edit(aplikasi_crud).php?kunci=<?php echo $h['kode_produk'];?>" style="text-decoration: none;color: white">Edit Data</a></button>
            </td>
        </tr>
        <?php } ?>   
</table>