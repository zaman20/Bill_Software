<?php 

    include('db.php');
    $name = $_POST['name'];
    $rate = $_POST['rate'];
    $stock = $_POST['stock'];
    $description = $_POST['description'];
    $active = $_POST['active'];

    $sql ="INSERT INTO `products`(`name`, `rate`, `stock`, `description`, `active`) VALUES ('$name','$rate','$stock','$description','$active')";
    $query = mysqli_query($conn,$sql);
    if($query){
        header('Location:../view/newproduct.php?msg="Product Added Successfully!"');
    }