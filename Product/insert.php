<?php

session_start();
if(isset($_SESSION['name'])){
  
}
    // Create Data
    $con = mysqli_connect('localhost','root', '', 'shoppingdb');
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
        if (condition) {
          # code...
        } else {
          # code...
        }
        

        $insert_query = "insert into product(Name,Category,Price,Description)
        values('$a','$b','$c','$d')";
        $insert_execute = mysqli_query($con,$insert_query);

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
          echo "<form action=''>
              <label for="">Search</label>
              <select name='searchoption'>
                <option value='id'>Id</option>
                <option value='pname'>Product Name</option>
                <option value='pcategory'>Product Category</option>
              </select>
              <input type='text' name='searchtxt'>
              <input type='submit' name='searchbtn' value='Search'>
              <a href='#'>Reset Filter</a>
          </form>";
          
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