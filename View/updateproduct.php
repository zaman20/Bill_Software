<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product </title>
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
            <li class="active"><a title="Update Product" href="updateproduct.php"><img src="../img/update product.png" alt=""></a></li>
            <li><a title="Details Product" href="productdetails.php"><img src="../img/details product.png" alt=""></a></li>
            <li><a title="Delete Product" href="deleteproduct.php"><img src="../img/delete product.png" alt=""></a></li>
            <li><a title="Bill Making" href="billmaking.php"><img src="../img/billing.png" alt=""></a></li>
            <li><a title="Log Out" href="../index.php"><img src="../img/logout.png" alt=""></a></li>
        </ul>
    </div>

       <div class="form-wrapper">
        <div class="title">
            <img src="../img/update product ani.gif" alt=""> 
        </div>
         <!-- search form -->
         <form action="" method="post">
           <label for="">Product ID</label> <input type="text" name="key">
           <input type="submit" value="Search">
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
                $description  = $result['3'];$active  = $result['4'];
        ?>

        <div class="empty-border"></div>
        <!--  -->
        <form action="../model/updateProduct.php" method="post">
            <label for="">Name: </label><input type="text" name="name" value="<?php echo $name;?>"> <br>
            <label for="">Rate: </label><input type="number" name="rate" value="<?php echo $rate;?>"> <br>
            <label for="">Description: </label><input type="text" name="description" value="<?php echo $description;?>"> <br>
            <label for="">Active</label>
            <select name="active" id="">
           <?php if($active == 'Yes'){?>
                <option value="Yes" selected>Yes</option>
                <option value="No" >No</option> <?php } else {?>
                
                <option value="No" selected>No</option>
                <option value="Yes" >Yes</option>
                <?php }?>
            </select> <br>
            <input type="hidden" name="id" value="<?php echo $id;?>">
            <input type="submit" value="Update">
            <input type="reset">
        </form>

        <?php
            }
            else{
                echo "Not Found Any Product!";

            }
        }
            
            
        ?>
            <?php include('notice.php'); ?>
       </div>

    </div>
</body>
</html>