<?php 

    include('db.php');
    $name = $_POST['name'];
    $rate = $_POST['rate'];
    $qty = $_POST['qty'];
    $stock = $_POST['stock'];
    $pid = $_POST['pid'];
    $total = $qty * $rate;
    $newStock = $stock - $qty;

    $sql ="INSERT INTO `cart`(`name`, `rate`, `qty`, `total`, `stock`,`p_id`) VALUES ('$name','$rate','$qty','$total','$stock','$pid')";
    $query = mysqli_query($conn,$sql);

    if($query){
        $sql2 = "UPDATE products SET stock ='$newStock' WHERE id='$pid'";
        $query2 = mysqli_query($conn,$sql2);
        header('Location:../view/billmaking.php?msg="Product Added Successfully!"');
    }