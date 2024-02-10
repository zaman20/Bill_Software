<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History Details </title>
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
            <li><a title="New Product" href="newproduct.php"><img src="../img/new product.png" alt=""></a></li>
            <li><a title="Update Product" href="updateproduct.php"><img src="../img/update product.png" alt=""></a></li>
            <li ><a title="Details Product" href="productdetails.php"><img src="../img/details product.png" alt=""></a></li>
            <li><a title="Delete Product" href="deleteproduct.php"><img src="../img/delete product.png" alt=""></a></li>
            <li><a title="Bill Making" href="billmaking.php"><img src="../img/billing.png" alt=""></a></li>
            <li class="active"><a title="History" href="history.php"><img src="../img/logout.png" alt=""></a></li>
            <li><a title="Log Out" href="../index.php"><img src="../img/close.png" alt=""></a></li>
        </ul>
    </div>

       <div class="form-wrapper">
        <div class="title">
            <h3>History</h3>
        </div>

            <table>
            <?php include('notice.php');?>
            <?php include('../model/history.php');?>
            <?php if($result>0){?>
                <tr>
                    <th>SL</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Total</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
                <?php while($row = mysqli_fetch_assoc($query)){ $count++;?>
                    
                <tr>
                    <td><?php echo $count;?></td>
                    <td>
                        <a href="slip.php?bill=<?php echo $row['id']?>">
                            <?php echo $row['buyer_name']?>
                        </a>
                    </td>
                    <td><?php echo $row['buyer_phone']?></td>
                    <td><?php echo $row['total']?></td>
                    <td><?php echo $row['date']?></td>
                    <td>
                        <a href="#" data-id="<?php echo $row['id'];?>" class="dlt-btn">Delete</a>
                    </td>
                </tr>
                
                <?php }}?>
            </table>
       </div>

    </div>

    <?php include('deleteForm.php'); ?>
    <?php include('../model/deleteHistory.php'); ?>

    
    <script src="../js/jquery.js"></script>
    <script src="../js/scripts.js"></script>
</body>
</html>