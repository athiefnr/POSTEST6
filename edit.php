<?php 
    require 'config.php';

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $result = mysqli_query($db, "SELECT * FROM cards WHERE id = '$id' ");
        $row = mysqli_fetch_array($result);
    }

    if(isset($_POST['submit'])){
        $Nama_Pembeli = $_POST['Nama_Pembeli'];
        $Warna_Barang = $_POST['Warna_Barang'];
        $Jumlah_Beli = $_POST['Jumlah_Beli'];
        $Express = $_POST['Express'];

        $update = mysqli_query($db, "UPDATE cards SET Nama_Pembeli='$Nama_Pembeli', Warna_Barang = '$Warna_Barang', Jumlah_Beli = '$Jumlah_Beli', Express = '$Express' WHERE id='$id'");

        if($update){
            header("Location:postest6.php");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POSTTEST 6</title>
    <link rel="stylesheet" href="style6.css">
</head>
<body>
    <header>
        <h2>Ubah Cart</h2>
    </header>
    
    <div class="form-class">
        <h3>Edit Data Cart</h3>
        <form action="" method="post">
        <label for="">Nama</label>
        <input type="text" name="Nama_Pembeli" value=<?=$row['Nama_Pembeli'];?>><br>
        <br>
        <label for="">Warna Barang</label>
        <input type="text" name="Warna_Barang" value=<?=$row['Warna_Barang'];?>><br>
        <br>
        <label for="">Jumlah Beli</label>
        <input type="number" name="Jumlah_Beli">value=<?=$row['Jumlah_Beli'];?>><br>
        <br>
        <label for="">Express</label>
        <input type="radio" name="Express">value=<?=$row['Express'];?>><br>
        <input type="submit" name="Form"></input>
        
        </form>
    </div>

</body>
</html>