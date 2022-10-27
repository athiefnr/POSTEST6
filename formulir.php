<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Postest 4</title>
    <link rel="stylesheet" href="style6.css">
</head>

<body>
    <script>
        function myFunction() {
           var element = document.body;
           element.classList.toggle("dark-mode");
        }
        </script>

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

    <div class = "main_content">

    <form action="tambah.php" method="POST">
        <label for="">Nama</label>
        <input type="text" name="Nama_Pembeli"></input>
        <br>
        <label for="">Warna Barang</label>
        <input type="text" name="Warna_Barang"></input>
        <br>
        <label for="">Jumlah Beli</label>
        <input type="number" name="Jumlah_Beli"></input>
        <br>
        <label for="">Express</label>
        <input type="radio" name="Express"></input> 
        <br>
        <input type="submit" name="Form"></input>

    </form>

    <?php 
        if(isset($_POST['Form'])){
            $Nama_Pembeli = $_POST['Nama_Pembeli'];
            $Warna_Barang = $_POST['Warna_Barang'];
            $Jumlah_Beli = $_POST['Jumlah_Beli'];
            $Express = $_POST['Express'];

            echo "Terima Kasih, $Nama_Pembeli";
            echo " Order anda dengan spesifikasi Warna $Warna_Barang, dengan jumlah barang $Jumlah_Beli dan Express Mode $Express";
            echo " akan segera di antar";
        }
    ?>
    </div>

    <div class = "footer">
        <p>Copyright &copy; 2022</p>
    </div>
    
</body>
</html>
