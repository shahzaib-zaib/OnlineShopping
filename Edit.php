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
</body>
</html>