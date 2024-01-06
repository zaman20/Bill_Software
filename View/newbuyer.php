<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard </title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="main-container">
       <?php include('menu.php');?>

       <div class="form-wrapper">
        <div class="title">
            <img src="../img/New buyer ani.gif" alt=""> 
        </div>
      
        <form action="../model/addBuyer.php" method="post">
            <label for="">Name: </label><input type="text"> <br>
            <label for="">Contact: </label><input type="number"> <br>
            <label for="">Email: </label><input type="email"> <br>
            <label for="">Address: </label><input type="text"> <br>
            <label for="">Gender</label>
            <select name="" id="">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select> <br>
            <input type="submit" value="Save">
            <input type="reset">
        </form>

        <?php include('notice.php');?>
       </div>

    </div>
</body>
</html>