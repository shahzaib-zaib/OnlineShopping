<?php

    // Create Data
    $con = mysqli_connect('localhost','root', '', 'shoppingdb');
    if(isset($_POST['Savebtn'])){
        $a = $_POST['ProName'];
        $b = $_POST['ProCategory'];
        $c = $_POST['ProPrice'];
        $d = $_POST['ProDescription'];

        $insert_query = "insert into product(Name,Category,Price,Description)
        values('$a','$b','$c','$d')";
        $insert_execute = mysqli_query($con,$insert_query);

        // Read/View Logic
        $fetch_query = "select * From product";
        $fetch_execute = mysqli_query($con, $fetch_query);
        $countrows = mysqli_num_rows($fetch_execute);
        if($countrows != 0){
            while($balti = mysqli_fetch_array($fetch_execute))
            {
                echo $balti[1];
                echo $balti[2];
                echo $balti[3];
                echo $balti[4];

            }
        }
        else{
            echo "Table has no Record";
        }
    }

?>