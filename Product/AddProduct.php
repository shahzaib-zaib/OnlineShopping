<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Add Product</h2>
    <form action="insert.php" method="post" enctype="multipart/form-data">
        <p>Enter Product Name</p>
        <input type="text" name="ProName" id="">
        <br>
        <select name="ProCategory" class="form-control">
            <option> Select Category</option>
            <?php
                include "config.php";
                $sql = "SELECT * FROM product";
                $result = mysqli_query($con,$sql) or die("Query Failed");

                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_assoc($result)){
                        
                    }
                }
        ?>
        </select>
        
        <br>
        <p>Enter Product Price</p>
        <input type="number" name="ProPrice" id="">
        <br>
        <p>Enter Product Price</p>
        <textarea name="ProDescription" id="" cols="20" rows="05"></textarea>
        <br>
        <p>Please Upload Product Image</p>
        <input type="file" name="ImageUpload">
        <br><br>
        <input type="submit" value="Add Product" name="Savebtn" id="">

    </form>
</body>
</html>