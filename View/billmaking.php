<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Billing </title>
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
            <li class="active"><a title="Bill Making" href="billmaking.php"><img src="../img/billing.png" alt=""></a></li>
            <li ><a title="History" href="history.php"><img src="../img/logout.png" alt=""></a></li>
            <li><a title="Log Out" href="../index.php"><img src="../img/close.png" alt=""></a></li>
        </ul>
    </div>

       <div class="form-wrapper form-wrapper-bill">
            <div class="title">
                <img src="../img/Billing ani.gif" alt=""> 
            </div>
            <!-- buyer add -->
            <div class="buyer-details">
                <h4>
                    <span style="text-align: left !important;">Buyer Details</span>
                    <!-- <span style="float: right;padding-right: 10px;">Date: 30/42/25; Time:19;22</span> -->
                </h4>

                <form action="" method="post">
                <label for="">Contact</label> <input type="text" name="bkey">
                <input type="submit" value="Search">
                    </form>
                        <?php 
                            include('../model/db.php');
                            $name='';$contact='';
                            if(isset($_POST['bkey'])){
                            $key = $_POST['bkey'];
                            $sql = "SELECT * FROM buyers WHERE contact = '$key' LIMIT 1 ";
                            $query = mysqli_query($conn, $sql);
                            if(mysqli_num_rows($query)>0){
                                $result = mysqli_fetch_row($query);
                                $id  = $result['0'];
                                $name  = $result['1'];
                                $contact  = $result['2'];
                                $email  = $result['3'];$address  = $result['4'];$gender  = $result['5'];
                                ?>
                                <div style="margin-bottom:5px;">
                                    <label for="">Name: <?php echo $name?></label>
                                    <label for="">Phone: <?php echo $contact?></label>
                                    <label for="">Email: <?php echo $email?></label>
                                </div>
                                
                                
                            
                            
                    <?php    } else{
                                    echo "Not Found Any Contact!Please Add";?><br>
                            <form action="../model/addBuyer2.php" method="post">
                                <label for="">Name: </label><input type="text" name="name"> <br>
                                <label for="">Contact: </label><input type="number" name="contact"> <br>
                                <label for="">Email: </label><input type="email" name="email"> <br>
                                <label for="">Address: </label><input type="text" name="address"> <br>
                                <label for="">Gender</label>
                                <select name="gender" id="">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select> <br>
                                <input type="submit" value="Add">
                                <input type="reset">
                            </form>
                    
                <?php    }}?>
                    
            </div>

            <div class="empty-border"></div>

            <div class="product-details">
                <h3 style="text-align: left;">Products</h3>
                <!-- search form -->
                <div class="input-box">
                    <form action="" method="post" class="product-search-form">
                        <label for="">Product Name:</label> <input type="text" name="key">
                    </form>
                
                    <?php 
                        include('../model/db.php');
                        if(isset($_POST['key'])){
                        $key = $_POST['key'];
                        $sql = "SELECT * FROM products WHERE name LIKE '%$key%' ";
                        $query = mysqli_query($conn, $sql);
                        if(mysqli_num_rows($query)>0){
                            $result = mysqli_fetch_row($query);
                            $id  = $result['0'];
                            $name  = $result['1'];
                            $rate  = $result['2'];
                            $stock = $result['3'];
                            $active = $result['5'];
                    ?>
                    <form action="../model/addCart.php" method="post">
                        <label for="">Name</label>
                        <input type="text" name="name" value="<?php echo $name?>">
                        <label for="">Rate</label>
                        <input type="text" name="rate" value="<?php echo $rate?>">
                        <label for="">Quantity:</label>

                        <?php if($active == 'Yes' || $stock>0){?>

                        <input type="text" name="qty" placeholder="Stock:<?php echo $stock;?>pcs">
                        <input type="hidden" name="pid" value="<?php echo $id;?>">
                        <input type="hidden" name="stock" value="<?php echo $stock;?>">
                        <input type="submit" value="Add">

                        <?php }else{?>
                            <label for="" style="color:red; font-size:20px;font-weight:bold;">Stock Out!</label>
                        <?php }?>
                    </form>
                    
                </div>
            

                    <?php
                        }
                        else{
                            echo "Not Found Any Product!";
                        
                        }
                    }
                        
                    ?>
                        <?php include('notice.php'); ?>
            </div>

            <div class="empty-border"></div>
            
            <div class="queue-list">
                <table >
                <?php include('../model/cart.php');?>
                <?php if($result>0){?>
                    <tr>
                        <th>SL</th>
                        <th>Name</th>
                        <th>Rate</th>
                        <th>Qty</th>
                        <th>Total</th>
                        <th>Action</th>
                    </tr>
                    <?php 
                    $item_list = [];
                    $qty_list = [];
                    $price_list = [];
                    while($row = mysqli_fetch_assoc($query)){ 
                        $item_list[] = $row['name'];
                        $qty_list[] = $row['qty'];
                        $price_list[] = $row['rate'];

                        $items = implode(',',$item_list);
                        $qtys = implode(',',$qty_list);
                        $prices = implode(',',$price_list);

                        $total = $row['total'];
                        $subtotal = $subtotal+$total;
                        $count++;?>
                    <tr>
                        <td><?php echo $count;?></td>
                        <td><?php echo $row['name']?></td>
                        <td><?php echo $row['rate']?></td>
                        <td><?php echo $row['qty']?></td>
                        <td><?php echo $row['total']?></td>
                        <td>
                            <a href="#" data-pid="<?php echo $row['p_id']?>" data-stock="<?php echo $row['stock']?>" data-id="<?php echo $row['id']?>" class="cart-dlt-btn">Delete</a>
                        </td>
                    </tr>
                    <?php }}?>
                
                </table>
            </div>
            
            <div class="button-queue">
                <label for="">Total Amount:</label><input type="text"  id="totalBox" value="<?php echo $subtotal;?>">  <br>
                <label for="">Pay Amount:</label><input type="text" id="payBox"> <br>
                <label for="">Return Amount:</label><input type="text"  id="returnBox"> <br>
                
                <div class="empty-border"></div>
                <form action="../model/makeInvoice.php" method="post" id="invoiceForm">
                    <input type="hidden"  name="name" value="<?php echo $name?>" >
                    <input type="hidden"   name="contact" value="<?php echo $contact?>">
                    <input type="hidden" name="items" value="<?php echo $items?>">
                    <input type="hidden" name="qtys" value="<?php echo $qtys?>">
                    <input type="hidden" name="prices" value="<?php echo $prices?>">
                    <input type="hidden" name="total" value="<?php echo $subtotal?>">
                    <input type="hidden" name="number" value="<?php echo $count?>">
                        <input type="submit" class="save-btn" value="SAVE">
                </form>
        
          
            </div>
       </div>

    </div>
    

    <form action="../model/deleteCart.php" method="post" id="deleteForm">
        <input type="hidden" name="get_id" id="set_id">
        <input type="hidden" name="get_pid" id="set_pid">
        <input type="hidden" name="get_stock" id="set_stock">
    </form>

    <script src="../js/jquery.js"></script>
    <script src="../js/scripts.js"></script>
</body>
</html>