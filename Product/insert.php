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
                echo "<div class='card'>
                  <div class='view overlay'>
                    <img class='card-img-top' src='https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg' alt='Card image cap'>
                    <a><div class='mask rgba-white-slight'></div></a>
                  </div>
                  <div class='card-body'>
                    <h4 class='card-title'>Card title</h4>
                    <p class='card-text'>Some quick example text to build on the card title and make up the bulk of the card's
                      content.</p>
                    <a href='#' class='btn btn-primary'>Button</a>
                  </div>
                </div>"
            }
        }
        else{
            echo "Table has no Record";
        }
    }

?>