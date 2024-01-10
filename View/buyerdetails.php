<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buyer Details </title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="main-container">
       <?php include('menu.php');?>

       <div class="form-wrapper">
        <div class="title">
            <img src="../img/Buyers Details ani.gif" alt=""> 
        </div>
        <?php include('../model/buyers.php');?>
            <table>
                <?php if($result>0){?>
                <tr>
                    <th>Name</th>
                    <th>Contact</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Gender</th>
                </tr>
                <?php while($row = mysqli_fetch_assoc($query)){?>
                <tr>
                    <td><?php echo $row['name']?></td>
                    <td><?php echo $row['contact']?></td>
                    <td><?php echo $row['email']?></td>
                    <td><?php echo $row['address']?></td>
                    <td><?php echo $row['gender']?></td>
                </tr>
                <?php }}?>
            </table>
       </div>

    </div>
</body>
</html>