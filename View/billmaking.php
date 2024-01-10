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
                <span style="float: right;padding-right: 10px;">Date: 30/42/25; Time:19;22</span>
            </h4>
            <form action="">
                <label for="">Name:</label><input type="text">
                <label for="">Contact No:</label><input type="text">
                <label for="">Email:</label><input type="text">
                <label for="">Address:</label><input type="text">
            </form>
            
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
                 <form action="" method="">
                    <label for="">Name</label> <input type="text" name="name" value="<?php echo $name?>">
                    <label for="">Rate</label> <input type="text" name="rate" value="<?php echo $name?>">
                    <label for="">Quantity</label> <input type="text" name="qty">
                    <input type="submit" value="Add">
                </form>
            </div>
         

        <div class="empty-border"></div>

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
            <table>
                <tr>
                    <th>SL</th>
                    <th>Name</th>
                    <th>Rate</th>
                    <th>Qty</th>
                    <th>Total</th>
                    <th>Action</th>
                </tr>
                <tr>
                    <td>01</td>
                    <td>Seven Up</td>
                    <td>120</td>
                    <td>3 </td>
                    <td>360</td>
                    <td>
                        <a href="" class="dlt-btn">Remove</a>
                    </td>
                </tr>
            </table>
        </div>
        <div class="button-queue">
            <label for="">Total Amount:</label><input type="text" name="" id="">
            <label for="">Pay Amount:</label><input type="text" name="" id="">
            <label for="">Return Amount:</label><input type="text" name="" id="">
            
            <div class="empty-border"></div>
            <a href="" class="save-btn">Save</a>
            <a href="" class="reset-btn">Reset</a>
            <a href="" class="print-btn">Print</a>
        </div>
       </div>

    </div>
</body>
</html>