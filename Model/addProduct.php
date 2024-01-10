<?php 

    include('db.php');
    $name = $_POST['name'];
    $rate = $_POST['rate'];
    $description = $_POST['description'];
    $active = $_POST['active'];

    $sql ="INSERT INTO `products`(`name`, `rate`, `description`, `active`) VALUES ('$name','$rate','$description','$active')";
    $query = mysqli_query($conn,$sql);
    if($query){
        header('Location:../view/newproduct.php?msg="Product Added Successfully!"');
    }