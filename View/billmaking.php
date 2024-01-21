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
      <?php include('menu.php'); ?>

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
                <label for="">Name</label>
                <input type="text" name="name" value="<?php echo $name?>">
                <label for="">Phone</label>
                <input type="text" name="contact" value="<?php echo $contact?>">
                <label for="">Email</label>
                <input type="text" name="email" value="<?php echo $email?>">
            
            
    <?php    } else{
                    echo "Not Found Any Contact!Please Add";?><br>
            <label for="">Name: </label><input type="text" name="name"> <br>
            <label for="">Contact: </label><input type="number" name="contact"> <br>
            <label for="">Email: </label><input type="email" name="email"> <br>
            <label for="">Address: </label><input type="text" name="address"> <br>
            <label for="">Gender</label>
            <select name="gender" id="">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select> <br>
    
   <?php    }}?>
                   
            </div>
        
        <div class="empty-border"></div>
        <div class="product-details">
            <h3 style="text-align: left;">Products</h3>
              <!-- search form -->
            <div class="input-box">
                <form action="" method="post" class="product-search-form">
                    <label for="">Product ID</label> <input type="text" name="key">
                </form>
               
                <?php 
                    include('../model/db.php');
                    if(isset($_POST['key'])){
                    $key = $_POST['key'];
                    $sql = "SELECT * FROM products WHERE id = '$key' LIMIT 1 ";
                    $query = mysqli_query($conn, $sql);
                    if(mysqli_num_rows($query)>0){
                        $result = mysqli_fetch_row($query);
                        $id  = $result['0'];
                        $name  = $result['1'];
                        $rate  = $result['2'];
                ?>
                <form action="../model/addCart.php" method="post">
                    <label for="">Name</label>
                    <input type="text" name="name" value="<?php echo $name?>">
                    <label for="">Rate</label>
                    <input type="text" name="rate" value="<?php echo $rate?>">
                    <label for="">Quantity</label>
                    <input type="text" name="qty">
                    <input type="submit" value="Add">
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
                while($row = mysqli_fetch_assoc($query)){ 
                    $total = $row['total'];
                    $subtotal = $subtotal+$total;
                    $count++;?>
                <tr>
                    <td><?php echo $count;?></td>
                    <td><?php echo $row['name']?></td>
                    <td><?php echo $row['rate']?></td>
                    <td><?php echo $row['qty']?></td>
                    <td><?php echo $row['total']?></td>
                    <td><a href="#" data-id="<?php echo $row['id']?>" class="dlt-btn">Delete</a></td>
                </tr>
                <?php }}?>
              
            </table>
        </div>
        <div class="button-queue">
            <label for="">Total Amount:</label><input type="text" name="" id="totalBox" value="<?php echo $subtotal;?>">
            <label for="">Pay Amount:</label><input type="text" name="" id="">
            <label for="">Return Amount:</label><input type="text" name="" id="">
            
            <div class="empty-border"></div>
            <a href="" class="save-btn">Save</a>
            <a href="" class="reset-btn">Reset</a>
            <a href="" class="print-btn">Print</a>
        </div>
       </div>

    </div>
    

    <form action="../model/deleteCart.php" method="post" id="deleteForm">
        <input type="hidden" name="get_id" id="set_id">
    </form>

    <script src="../js/jquery.js"></script>
    <script src="../js/scripts.js"></script>
</body>
</html>