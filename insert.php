<?php

    $con = mysqli_connect('localhost','root', '', 'shoppingdb');
    if(isset($_POST['Savebtn'])){
        $a = $_POST['ProName'];
        $b = $_POST['ProCategory'];
        $c = $_POST['ProPrice'];
        $d = $_POST['ProDescription'];

        $insert_query = "insert into product(Name,Category,Price,Description)
        values('$a','$b','$c','$d')";
        $insert_execute = mysqli_query($con,$insert_query);

    }

?>