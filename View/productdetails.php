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
       <?php include('menu.php') ?>

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