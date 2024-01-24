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
    <div class="menu">
        <ul>
            <li><a title="New Buyer" href="newbuyer.php"><img src="../img/new buyer.png" alt=""></a></li>
            <li><a title="Update Buyer" href="updatebuyer.php"><img src="../img/Update buyer.png" alt=""></a></li>
            <li><a title="Buyer Details" href="buyerdetails.php"><img src="../img/buyer Details.png" alt=""></a></li>
            <li><a title="Delete Buyer" href="deletebuyer.php"><img src="../img/delete buyer.png" alt=""></a></li>
            <li class="active"><a title="New Product" href="newproduct.php"><img src="../img/new product.png" alt=""></a></li>
            <li><a title="Update Product" href="updateproduct.php"><img src="../img/update product.png" alt=""></a></li>
            <li><a title="Details Product" href="productdetails.php"><img src="../img/details product.png" alt=""></a></li>
            <li><a title="Delete Product" href="deleteproduct.php"><img src="../img/delete product.png" alt=""></a></li>
            <li><a title="Bill Making" href="billmaking.php"><img src="../img/billing.png" alt=""></a></li>
            <li><a title="Log Out" href="../index.php"><img src="../img/logout.png" alt=""></a></li>
        </ul>
    </div>

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