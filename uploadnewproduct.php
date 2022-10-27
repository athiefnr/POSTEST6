<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Postest 6</title>
    <link rel="stylesheet" href="style6.css">
</head>

<body>
    <script>
        function myFunction() {
           var element = document.body;
           element.classList.toggle("dark-mode");
        }
        </script>

    <script>alert("Selamat Datang");</script>
    <div class = "header">
        <h1>Market of Cards</h1>
    </div>

    <div class = "navbar">
        <a href="postest6.php">Home</a>
        <a href="produk6.php">Product</a>
        <a href="profil6.php">About Me</a>
        <a href="cart.php">Cart</a>
        <button onclick="myFunction()">Switch Mode</button>
    </div>
    
    <p>Tanggal Pesan : <?=date("d-m-Y")?></p><br>
    <form action="" method="post" enctype="multipart/form-data">    

        <label for="">Tanggal Tiba : </label><br>
        <input type="date" name="tiba"><br><br>
        
        <label for="">Nama Pembeli : </label><br>
        <input type="text" name="nama"><br><br>

        <label for="">Tipe : </label><br>
        <input type="file" name="gambar"><br><br>
        
        <input type="hidden" name="checkout" value=<?= date("d-m-Y")?>>
        <input type="submit" name="submit">
    </div>

    
    <div class = "footer">
        <p>Copyright &copy; 2022</p>
    </div>

    </form>
</body>
</html>

<?php 

    require 'config.php';

    if(isset($_POST['submit'])){
        $tiba = $_POST['tiba'];
        $checkout = $_POST['checkout'];
        $nama = $_POST['nama'];
        
        $gambar = $_FILES['gambar']['name'];
        $x = explode('.', $gambar);
        $ekstensi = strtolower(end($x));

        $gambar_baru = "$nama.$ekstensi";
        $tmp = $_FILES['gambar']['tmp_name'];

        if(move_uploaded_file($tmp, 'gambar/'.$gambar_baru)){
            $query = "INSERT INTO cards (tiba, checkout, nama) VALUES ('$tiba','$checkout','$gambar_baru')";
            $result = $db->query($query);

            if($result){
                header("Location:postest6.php");
            }else{
                echo "gagal kirim";
            }
        }
        
    }
?>