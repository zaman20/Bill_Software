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
       <?php include('menu.php'); ?>

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