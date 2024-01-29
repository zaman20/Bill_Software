<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="login-box">
            <h2 style="text-align:center;font-size: 33px; margin-top: -15px;">Billing Preparing System</h2>
            <form action="model/login.php" method="post">
                <label for="">User Name: </label>
                <input type="text" name="uname" id="">
                <label for="">Password: </label>
                <input type="password" name="pass">
                <input type="submit" value="Login">
            </form>

            <?php include('view/notice.php');?>
        </div>
    </div>
</body>
</html>