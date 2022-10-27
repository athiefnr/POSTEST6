<?php 

require 'config.php';

if(isset($_POST['submit'])){
    $Nama_Pembeli = $_POST['Nama_Pembeli'];
    $Warna_Barang = $_POST['Warna_Barang'];
    $Jumlah_Beli = $_POST['Jumlah_Beli'];
    $Express = $_POST['Express'];

    $kirim = mysqli_query($db, "INSERT INTO cards (Nama_Pembeli,Warna_Barang,Jumlah_Beli,Express) VALUES ('$Nama_Pembeli','$Warna_Barang','$Jumlah_Beli','$Express')");

    if($kirim){
        header("Location:postest6.php");
    }else {
        echo "gagal mengirim";
    }
}