<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $con = mysqli_connect('localhost','root', '', 'shoppingdb');
        $Pid = $_GET['id'];
        $fetch_data = "SELECT * FROM product WHERE Id = '$Pid'";
        $run = mysqli_query($con, $fetch_data);
        $data = mysqli_fetch_array($run);
    ?>
    <h2>Update Product</h2>
    <form action="insert.php" method="post">
        <p>Enter Product Name</p>
        <input type="text" name="ProName" id="" value="<?php echo $data[1]; ?>">
        <br>
        <select name="ProCategory" id="">
            <option value="Electtricity" <?php if($data[2] == "Electtricity"){echo "selected"}; ?>>Electricity</option>
            <option value="mobile">Mobile</option>
            <option value="clothes">Clothes</option>
            <option value="crockery">Crockery</option>
            <option value="other">Other</option>
        </select>
        <br>
        <p>Enter Product Price</p>
        <input type="number" name="ProPrice" id="" value="<?php echo $data[3];" ?>>
        <br>
        <p>Enter Product Price</p>
        <textarea name="ProDescription" id="" cols="20" rows="05" value="<?php echo $data[4];" ?></textarea>
        <br>
        <input type="submit" value="Add Product" name="Savebtn" id="">

    </form>
    <?php
        if(isset($_POST['Savebtn'])){
            $id = $_POST[id''];
            $a = $_POST['ProName'];
            $b = $_POST['ProCategory'];
            $c = $_POST['ProPrice'];
            $d = $_POST['ProDescription'];

            $update_query = "update product set Name = "

        }

    ?>
</body>
</html>