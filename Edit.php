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
        <input type="text" name="ProName" id="">
        <br>
        <select name="ProCategory" id="">
            <option value="Electtricity">Electricity</option>
            <option value="mobile">Mobile</option>
            <option value="clothes">Clothes</option>
            <option value="crockery">Crockery</option>
            <option value="other">Other</option>
        </select>
        <br>
        <p>Enter Product Price</p>
        <input type="number" name="ProPrice" id="">
        <br>
        <p>Enter Product Price</p>
        <textarea name="ProDescription" id="" cols="20" rows="05"></textarea>
        <br>
        <input type="submit" value="Add Product" name="Savebtn" id="">

    </form>
</body>
</html>