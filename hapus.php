<?php 

require 'config.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $hapus = mysqli_query($db, "DELETE FROM cards WHERE id='$id'");

    if($hapus){
        header("Location:postest6.php");
    }
}