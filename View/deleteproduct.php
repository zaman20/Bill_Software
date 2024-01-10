<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Product </title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="main-container">
      <?php include('menu.php') ?>

       <div class="form-wrapper">
        <div class="title">
            <img src="../img/delete product ani.gif" alt=""> 
        </div>
            <table>
            <?php include('../model/products.php');?>
            <?php if($result>0){?>
                <tr>
                    <th>SL</th>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Rate</th>
                    <th>Active</th>
                    <th>Action</th>
                </tr>
                <?php while($row = mysqli_fetch_assoc($query)){ $count++;?>
                <tr>
                    <td><?php echo $count;?></td>
                    <td><?php echo $row['id']?></td>
                    <td><?php echo $row['name']?></td>
                    <td><?php echo $row['rate']?></td>
                    <td><?php echo $row['active']?></td>
                    <td>
                        <a href="#" data-id="<?php echo $row['id'];?>" class="dlt-btn">Delete</a>
                    </td>
                </tr>
                <?php }}?>
            </table>
       </div>

    </div>
    <?php include('deleteForm.php'); ?>
    <?php include('../model/deleteProduct.php'); ?>

    <script src="../js/jquery.js"></script>
    <script src="../js/scripts.js"></script>
</body>
</html>