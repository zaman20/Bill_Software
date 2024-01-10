<?php 

    include('db.php');

    $id = $_POST['id'];
    $name = $_POST['name'];
    $rate = $_POST['rate'];
    $description = $_POST['description'];
    $active = $_POST['active'];
    $sql ="UPDATE `products` SET `name` ='$name', `rate`= '$rate' , `description`='$description', `active`='$active' WHERE `id` = '$id'  LIMIT 1 ";
    $query = mysqli_query($conn,$sql);
    if($query){
        header('Location:../view/updateproduct.php?msg="Updated Successfully!"');
    }