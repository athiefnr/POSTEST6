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

    <div class = "main_content">
        <h1>Apa itu Playing Cards? </h1>
        <img src="images\logo.png" width=20%>
        <button id="btn-info"> Ayo Cari Tahu</button>
        <p id="info" style="display: none;">Kartu permainan (bahasa Inggris: playing cards), atau lebih dikenal dengan kartu remi, adalah sekumpulan kartu seukuran tangan yang digunakan untuk permainan kartu. Kartu ini sering juga digunakan untuk hal-hal lain, seperti sulap, enkripsi, permainan papan, dan pembuatan rumah kartu. Kata “remi” itu sendiri sebenarnya adalah nama salah satu permainan kartu.</p>

        <script src="jquery.js"></script>
    </div>

    <div class = "footer">
        <p>Copyright &copy; 2022</p>
    </div>

    
</body>
</html>