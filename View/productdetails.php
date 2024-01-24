<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details </title>
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
            <li class="active"><a title="Details Product" href="productdetails.php"><img src="../img/details product.png" alt=""></a></li>
            <li><a title="Delete Product" href="deleteproduct.php"><img src="../img/delete product.png" alt=""></a></li>
            <li><a title="Bill Making" href="billmaking.php"><img src="../img/billing.png" alt=""></a></li>
            <li><a title="Log Out" href="../index.php"><img src="../img/logout.png" alt=""></a></li>
        </ul>
    </div>

       <div class="form-wrapper">
        <div class="title">
            <img src="../img/product details ani.gif" alt=""> 
        </div>

            <table>
            <?php include('../model/products.php');?>
            <?php if($result>0){?>
                <tr>
                    <th>SL</th>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Rate</th>
                    <th>Description</th>
                    <th>Active</th>
                </tr>
                <?php while($row = mysqli_fetch_assoc($query)){ $count++;?>
                <tr>
                    <td><?php echo $count;?></td>
                    <td><?php echo $row['id']?></td>
                    <td><?php echo $row['name']?></td>
                    <td><?php echo $row['rate']?></td>
                    <td><?php echo $row['description']?></td>
                    <td><?php echo $row['active']?></td>
                </tr>
                <?php }}?>
            </table>
       </div>

    </div>
</body>
</html>