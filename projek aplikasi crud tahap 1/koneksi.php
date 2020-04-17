<?php
 try {
     //code...
     $koneksi = new PDO("mysql:host=localhost;dbname=aplikasi_crud_tahap1","root","");
    //  echo "berhasil terkoneksi";
 } catch (PDOException $th) {
     //throw $th;
     echo $th->getMessage();
 } 
?>