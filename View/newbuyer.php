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
        <div class="menu">
        <ul>
            <li class="active"><a title="New Buyer" href="newbuyer.php"><img src="../img/new buyer.png" alt=""><br> New Buyer</a></li>
            <li><a title="Update Buyer" href="updatebuyer.php"><img src="../img/Update buyer.png" alt=""><br>Buyer Update</a></li>
            <li ><a title="Buyer Details" href="buyerdetails.php"><img src="../img/buyer Details.png" alt=""><br>Buyer Details</a></li>
            <li><a title="Delete Buyer" href="deletebuyer.php"><img src="../img/delete buyer.png" alt=""><br>Delete Buyer</a><br></li>
            <li><a title="New Product" href="newproduct.php"><img src="../img/new product.png" alt=""><br>New Product</a></li>
            <li><a title="Update Product" href="updateproduct.php"><img src="../img/update product.png" alt=""><br>Update Product</a></li>
            <li><a title="Details Product" href="productdetails.php"><img src="../img/details product.png" alt=""><br>Details Product</a></li>
            <li><a title="Delete Product" href="deleteproduct.php"><img src="../img/delete product.png" alt=""><br>Delete Product</a></li>
            <li ><a title="Bill Making" href="billmaking.php"><img src="../img/billing.png" alt=""><br>Bill Making</a></li>
            <li ><a title="History" href="history.php"><img src="../img/logout.png" alt=""><br>History</a></li>
            <li><a title="Log Out" href="../index.php"><img src="../img/close.png" alt=""><br>Logout</a></li>
        </ul>
        </div>

       <div class="form-wrapper">
        <div class="title">
            <img src="../img/New buyer ani.gif" alt=""> 
        </div>
      
        <form action="../model/addBuyer.php" method="post">
            <label for="">Name: </label><input type="text" name="name"> <br>
            <label for="">Contact: </label>
            <input type="text" name="contact" id="phoneNumber" maxlength="11"> <br>
            <label for="">Email: </label><input type="email" name="email"> <br>
            <label for="">Address: </label><input type="text" name="address"> <br>
            <label for="">Gender</label>
            <select name="gender" id="">
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