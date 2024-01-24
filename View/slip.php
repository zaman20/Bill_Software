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
            <li><a title="Details Product" href="productdetails.php"><img src="../img/details product.png" alt=""></a></li>
            <li><a title="Delete Product" href="deleteproduct.php"><img src="../img/delete product.png" alt=""></a></li>
            <li><a title="Bill Making" href="billmaking.php"><img src="../img/billing.png" alt=""></a></li>
            <li><a title="" href=""><img src="../img/logout.png" alt=""></a></li>
        </ul>
    </div>

       <div class="form-wrapper">
        <div class="title">
            <img src="../img/product details ani.gif" alt=""> 
        </div>
            <?php include('../model/slip.php');?>
            <div style="margin-bottom:5px;">
                <label for="">Customer-Name: <?php echo $name?> | </label>
                <label for="">Phone: <?php echo $contact?></label>
            </div>
            <table>
                <tr>
                    <th>SL</th>
                    <th>Items</th>
                    <th>Rate</th>
                    <th>Qty</th>
                    <th>Total</th>
                </tr>
                <?php for($i=0;$i<$num;$i++){ $count++;?>
                    <tr>
                        <td><?php echo $count;?></td>
                        <td><?php echo $items[$i]?></td>
                        <td><?php echo $prices[$i]?></td>
                        <td><?php echo $qtys[$i]?></td>
                        <td><?php echo $qtys[$i] * $prices[$i]?></td>
                    </tr>
                <?php }?>
                <tr>
                    <td colspan="4">Total: </td>
                    <td><?php echo $total;?></td>
                </tr>
            </table>

            <button class="print-btn">Print</button>
       </div>

    </div>

    <script src="../js/jquery.js"></script>
    <script src="../js/scripts.js"></script>
</body>
</html>