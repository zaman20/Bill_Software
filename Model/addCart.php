<?php 

    include('db.php');
    $name = $_POST['name'];
    $rate = $_POST['rate'];
    $qty = $_POST['qty'];
    $total = $qty * $rate;

    $sql ="INSERT INTO `cart`(`name`, `rate`, `qty`, `total`) VALUES ('$name','$rate','$qty','$total')";
    $query = mysqli_query($conn,$sql);
    if($query){
        header('Location:../view/billmaking.php?msg="Product Added Successfully!"');
    }