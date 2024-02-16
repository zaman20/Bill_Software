<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Buyer </title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="main-container">
    <div class="menu">
        <ul>
            <li><a title="New Buyer" href="newbuyer.php"><img src="../img/new buyer.png" alt=""><br> New Buyer</a></li>
            <li><a title="Update Buyer" href="updatebuyer.php"><img src="../img/Update buyer.png" alt=""><br>Buyer Update</a></li>
            <li><a title="Buyer Details" href="buyerdetails.php"><img src="../img/buyer Details.png" alt=""><br>Buyer Details</a></li>
            <li class="active"><a title="Delete Buyer" href="deletebuyer.php"><img src="../img/delete buyer.png" alt=""><br>Delete Buyer</a><br></li>
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
            <img src="../img/Delete buyer ani.gif" alt=""> 
        </div>
            <table>
            <?php include('../model/buyers.php');?>
            <?php if($result>0){?>
                <tr>
                    <th>Name</th>
                    <th>Contact</th>
                    <th>Address</th>
                    <th>Action</th>
                </tr>
                <?php while($row = mysqli_fetch_assoc($query)){?>
                <tr>
                    <td><?php echo $row['name']?></td>
                    <td><?php echo $row['contact']?></td>
                    <td><?php echo $row['address']?></td>
                    <td>
                        <a href="#" class="dlt-btn" data-id="<?php echo $row['id'];?>">Delete</a>
                    </td>
                </tr>
                <?php }}?>
            </table>
       </div>

    <?php include('deleteForm.php'); ?>
    <?php include('../model/deleteBuyer.php'); ?>

    </div>

    <script src="../js/jquery.js"></script>
    <script src="../js/scripts.js"></script>
</body>
</html>