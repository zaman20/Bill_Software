<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Buyer </title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="main-container">
       <?php include('menu.php');?>

       <div class="form-wrapper">
        <div class="title">
            <img src="../img/update buyer ani.gif" alt=""> 
        </div>
        <!-- search form -->
        <form action="" method="post">
           <label for="">Contact</label> <input type="text" name="key">
           <input type="submit" value="Search">
        </form>
        <?php 
            include('../model/db.php');
            if(isset($_POST['key'])){
            $key = $_POST['key'];
            $sql = "SELECT * FROM buyers WHERE contact = '$key' LIMIT 1 ";
            $query = mysqli_query($conn, $sql);
            if(mysqli_num_rows($query)>0){
                $result = mysqli_fetch_row($query);
                $id  = $result['0'];
                $name  = $result['1'];
                $contact  = $result['2'];
                $email  = $result['3'];$address  = $result['4'];$gender  = $result['5'];
        ?>

        <div class="empty-border"></div>
        <!--  -->
        <form action="../model/updateBuyer.php" method="post">
            <label for="">Name: </label><input type="text" name="name" value="<?php echo $name;?>"> <br>
            <label for="">Contact: </label><input type="number" name="contact" value="<?php echo $contact;?>"> <br>
            <label for="">Email: </label><input type="email" name="email" value="<?php echo $email;?>"> <br>
            <label for="">Address: </label><input type="text" name="address" value="<?php echo $address;?>"> <br>
            <label for="">Gender</label>
            <select name="gender" id="">
           <?php if($gender == 'male'){?>
                <option value="Male" selected>Male</option>
                <option value="Female" >Female</option> <?php } else {?>
                
                <option value="Female" selected>Female</option>
                <option value="Male" >Male</option>
                <?php }?>
            </select> <br>
            <input type="hidden" name="id" value="<?php echo $id;?>">
            <input type="submit" value="Update">
            <input type="reset">
        </form>

        <?php
            }
            else{
                echo "Not Found Any Contact!";

            }
        }
            
            
        ?>
            <?php include('notice.php'); ?>
       </div>

    </div>
</body>
</html>