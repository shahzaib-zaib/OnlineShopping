<?php
    $con = mysqli_connect('localhost','root', '', 'shoppingdb');

    $productId = $_GET['id'];
    $delete_query = "DELETE  FROM Product WHERE Id = '$productId'";
    $delete_execute = mysqli_query($con, $delete_query);
    header('location:insert.php');    

?>