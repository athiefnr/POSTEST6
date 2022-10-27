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
        <h1>About Me</h1>
        <p>Nama   : Athief Naufal</p>
        <p>NIM    : 2009106101</p>
        <p>Kelas  : IF'C 20</p>
    </div>

    <div class = "footer">
        <p>Copyright &copy; 2022</p>
    </div>
</body>
</html>