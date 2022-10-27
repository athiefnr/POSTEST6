<?php 
    require 'config.php';

    $result = mysqli_query($db, "SELECT * FROM cards");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>POSTEST 6</title>
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
            <h3>Cart Anda</h3>
            <a href="formulir.php" class="tambah">Tambah ke Cart</a>
            <table>

                <?php 
                    $i = 1;
                    while($row = mysqli_fetch_array($result)){

                ?>

                <tr>
                    <td><?=$i;?></td>
                    <td nowrap><?=$row['Nama_Pembeli']?></td>
                    <td><?=$row['Warna_Barang']?></td>
                    <td><?=$row['Jumlah_Beli']?></td>
                    <td><?=$row['Express']?></td>
                    <td class="edit">
                        <a href="edit.php?id=<?=$row['id'];?>">Edit Cart</a>
                    </td>
                    <td class="hapus">
                        <a href="hapus.php?id=<?=$row['id'];?>">Hapus Cart</a>
                    </td>
                </tr>
                
                <?php
                    $i++; 
                        }
                ?>

            </table>
        </div>
        
    <div class = "footer">
        <p>Copyright &copy; 2022</p>
    </div>

    </body>
</html>