


<?php

session_start();
if(isset($_SESSION['name'])){
  
}
    // Create Data
    include "config.php";
    if(isset($_POST['Savebtn'])){
        $a = $_POST['ProName'];
        $b = $_POST['ProCategory'];
        $c = $_POST['ProPrice'];
        $d = $_POST['ProDescription'];

        $imagename = $_FILES['ImageUpload']['name'];
        $imagesize = $_FILES['ImageUpload']['size'];
        $imageextension = $_FILES['ImageUpload']['type'];
        $imagetempAdd = $_FILES['ImageUpload']['tmp_name'];

        //Extension Checking
        if (strtolower($imageextension) == "image/jpg" || strtolower($imageextension) == "image/jpeg") {
          if ($imagesize <= 2000000) {
            $ImageSave = "Images/" . $imagename;
            move_uploaded_file($imagetempAdd, $ImageSave);
            $insert_query = "insert into product(Name,Category,Price,Description,ProImage)
            values('$a','$b','$c','$d','$ImageSave')";
            $insert_execute = mysqli_query($con,$insert_query);
          } else {
            echo "<script>alert('Size not Supported')</script>";
          }
          
        } else {
          echo "<script>alert('Extension not Supported')</script>";
        }

        // Read/View Logic
        $fetch_query = "select * From product";
        if (isset($_GET['searchbtn'])) {
          $a = $_GET['searchtxt'];
          $b = $_GET['searchoption'];
          if ($b = "id") {
            $query = "select * from product where Id = $a";
          } else if ($b = "pname") {
            $query = "select * from product where Name like '%$a%'";
          }
          else if ($b = "pcategory") {
            $query = "select * from product where Category like '%$a%'";
          }
          
          $query = "select * from product where Id = $a";
        }
        $fetch_execute = mysqli_query($con, $fetch_query);
        $countrows = mysqli_num_rows($fetch_execute);
        if($countrows != 0){
          
          
            while($row = mysqli_fetch_array($fetch_execute))
            {
                echo "<div class='card'>
                  <div class='view overlay'>
                    <img class='card-img-top' src='' alt='Card image cap'>
                    <a><div class='mask rgba-white-slight'></div></a>
                  </div>
                  <div class='card-body'>
                    <h4 class='card-title'>$row[0]</h4>
                    <p class='card-text'></p>
                    <a href='#' class='btn btn-primary'>Button</a>
                  </div>
                </div>";
            }
        }
        else{
            echo "Table has no Record";
        }
    }

?>