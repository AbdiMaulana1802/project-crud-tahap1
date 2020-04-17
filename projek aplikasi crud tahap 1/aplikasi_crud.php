<?php
    include('koneksi.php');
    // membuat kode produk otomatis
    $kuery = $koneksi->prepare("SELECT MAX(`kode_produk`) AS kode FROM `belajar_crud`");
    $kuery->execute();
    $hasil = $kuery->fetch();
    $kode = $hasil['kode'];

    $kp = (int) substr($kode,3);
    $kp++;

    $car="MD-";
    $kodeProduk = $car.sprintf("%03s",$kp);
    // echo $kode;
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Crud</title>

</head>
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
.container {
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

<body>





   <form nama="input data" action="add(data masuk).php" method="POST">
        <div class="container">
            <div class="h">
            <hr>
            <h1 align="center">Form Input Master <br> Dan Stock Data Barang</br></h1>
            <hr>
        </div>
        <table class="table" id="form">
            <tr>
                <td>
                   <h2>Kode Produk</h2>
                </td>
                <td>:</td>
                <td><input type="text" name="kode" value="<?php echo $kodeProduk ?>" readonly></td>
            </tr>

            <tr>
                <td width="230px">
                   <h2>Nama Produk</h2>
                </td>
                <td>:</td>
                <td><input type="text" name="nama_produk"></td>
            </tr>

        <tr>
            <td>
               <h2>Harga Produk</h2>
            </td>
            <td>:</td>
            <td><input type="number" name="harga"></td>
            </tr>
            <tr>
                <td>
                   <h2>Satuan</h2></td>
                    <td>:</td>
                    <td>
                    <select name="satuan" id="">
                        <option value="null">Pilih Satuan</option>
                        <option value="gelas">Gelas</option>
                        <option value="cup">Cup</option>
                        <option value="piring">Piring</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>
                   <h2>Kategori</h2></td>
                    <td>:</td>
                    <td>
                    <select name="kategori" id="" width="">
                        <option value="null">Pilih Kategori</option>
                        <option value="hot drink">Hot Drink</option>
                        <option value="cold drink">Cold Drink</option>
                        <option value="makanan">Makanan</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td width="100px">
                   <h2>URL Gambar</h2>
                </td>
                <td>:</td>     
                <td><input type="text" name="url" id="gambar"></td>
            </tr>
            



            <tr>
                <td width="100px">
                   <h2>Stok awal</h2>
                </td>
                <td>:</td>
                <td><input type="number" name="stok_awal"></td>
            </tr>
        </table>
        <!-- <button type="submit"  class="b">Simpan</button> -->
        <td colspan="2"><button type="submit" name="btnsimpan" value="simpan" class="b">Simpan</button></td>
        

           
           
    </form>
</div>

 <?php
        $tampil = include('tampildata.php');
        echo $tampil;
    ?>

</body>

</html>