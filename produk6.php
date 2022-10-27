<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Postest 5</title>
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

    <div class = "main_content">
        <div class = "produk">
            <h1>Red</h1>
            <img src="images/produk1.png" width=15%>
            <p>Rp. 100.000 </p>
            <h1>Moby Dick</h1>
            <img src="images/produk2.png" width=10%>
            <p>Rp. 250.000 </p>

            <a href="formulir.php">Add to Cart</a>
        </div>
    </div>
    
    <div class = "footer">
        <p>Copyright &copy; 2022</p>
    </div>
</body>
</html>