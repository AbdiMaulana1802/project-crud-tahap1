<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi crud</title>

    <style>

hr{
    border: 1px solid black;

}


.b{
    border-radius: 20px;
    background-color: grey;
    border: none;
    color: white;
    padding: 10px 20px;
    text-decoration: none;
    display: inline-block;
    font-size: 20px;
}
.container1 {
    border-radius: 10px;
    border: 1px solid black;
    background-color: white;
    width:35%;
    padding-top: 1px;
    padding-right:15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
    padding-bottom: 10px;

}
</style>

</head>
<body>

<?php 
        include('koneksi.php');
        $kunci = $_GET['kunci'];
        $hasil = $koneksi->query("SELECT * FROM `belajar_crud` WHERE `kode_produk` = '$kunci'");
        foreach ($hasil as $h) {?>

      <div class="container1">
        <form name="Input" action="editdata.php" method="POST">
        

            <div class="h">
            <hr>
            <h1 align="center">Form Input Master <br> Dan Stock Data Barang</br></h1>
            <hr>
        </div>

        <table>

        <tr>
                <td><h2>kode produk</h2></td>
                <td>:</td>
                
                <td><input type="text" name="kode" value="<?php echo $h['kode_produk'];?>"></td>
            </tr>
            <tr>
                <td><h2>Nama Produk</h2></td>
                <td>:</td>
                <td><input type="text" name="nama_produk" value="<?php echo $h['nama_produk'];?>"></td>
            </tr>
            <tr>
                <td><h2>Harga Produk</h2></td>
                <td>:</td>
                <td><input type="number" name="harga" value="<?php echo $h['harga_produk'];?>"></td>
            </tr>
        
            <tr>
                <td><h2>Satuan</h2></td>
                <td>:</td>
                <td>
                    <select name="satuan">
                        <option <?php if ($h['satuan'] == "null") {echo "selected=selected";}?> value="null">Pilih Satuan</option>
                        <option <?php if ($h['satuan'] == "gelas") {echo "selected=selected";}?> value="gelas">Gelas</option>
                        <option <?php if ($h['satuan'] == "cup") {echo "selected=selected";}?> value="cup">Cup</option>
                        <option <?php if ($h['satuan'] == "piring") {echo "selected=selected";}?> value="piring">Piring</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td><h2>Kategori</h2></td>
                <td>:</td>
                <td>
                    <select name="kategori">
                        <option <?php if ($h['kategori']=='null') { echo "selected=selected"; }?> value="null">Pilih Kategori</option>
                        <option <?php if ($h['kategori']=='hot drink') { echo "selected=selected"; }?> value="hot drink">Hot Drink</option>
                        <option <?php if ($h['kategori']=='cold drink') { echo "selected=selected"; }?> value="cold drink">Cold Drink</option>
                        <option <?php if ($h['kategori']=='makanan') { echo "selected=selected"; }?> value="makanan">Makanan</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td><h2>url gambar</h2></td>
                <td>:</td>
                <td><input type="url" name="url" id="gambar" value="<?php echo $h['url_gambar'];?>"></td>
            </tr>

            <tr>
                <td><h2>Stok awal</h2></td>
                <td>:</td>
                <td><input type="number" name="stok" value="<?php echo $h['stok_awal'];?>"></td>
            </tr>

            <tr>
            <td colspan="2"><button type="submit" name="btnsimpan" value="simpan" class="b">Simpan</button></td>
            <td><button type="submit" name="btnbatal" value="null" class="b"><a href="aplikasi_crud.php" style="text-decoration: none;color: black">batal</a></button></td>
            </tr>

          
        </table>
        
        </div>
        </form>

        <?php } ?>

        <?php
        $tampil = include('tampildata.php');
        echo $tampil;
    ?>

</body>
</html>