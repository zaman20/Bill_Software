<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Product </title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="main-container">
      <?php include('menu.php');?>

       <div class="form-wrapper">
        <div class="title">
            <img src="../img/New Product ani.gif" alt=""> 
        </div>
        
        <h3 style="color:red;">Product ID: <?php include('../model/productId.php');?></h3>

        <div class="empty-border"></div>
      
        <form action="../model/addProduct.php" method="post">
            <label for="">Name: </label><input type="text" name="name"> <br>
            <label for="">Rate: </label><input type="number" name="rate"> <br>
            <label for="">Description: </label><input type="text" name="description"> <br>
            <label for="">Activate</label>
            <select name="active" id="">
                <option value="Yes">Yes</option>
                <option value="No">No</option>
            </select> <br>
            <input type="submit" value="Save">
            <input type="reset">
        </form>
        <?php include('notice.php');?>
       </div>

    </div>
</body>
</html>