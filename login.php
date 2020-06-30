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
            session_start();
            $email = $_POST['email'];
            $pswd = $_POST['pswd'];
            $login_query = "select * from user where Email = '$email' and Password = '$pswd'";
            $execute = mysqli_query($con, $login);
            $verfy = mysqli_num_rows($execute);
            if ($verfy == 1) {
                $cdata = mysqli_fetch_array($execute);
                $_SESSION['name'] = $data['1'];
                header('location:Product/insert.php');
            } else {
                echo "<script>
                alert('Login Not Successfully');
                </script>";
            }
            
        }

    ?>
</body>
</html>