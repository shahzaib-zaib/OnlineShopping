<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Login</h2>
    <form action="">
        <p>Enter Your Email</p>
        <input type="email" name="email" id="">
        <p>Enter Your Password</p>
        <input type="password" name="pswd" id="">
        <input type="submit" name="Savebtn" value="login" id="">
    </form>

    <?php

        if(isset($_POST['Savebtn'])){
            $email = $_POST['email'];
            $pswd = $_POST['pswd'];

        }

    ?>
</body>
</html>