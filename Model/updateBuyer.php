<?php 

    include('db.php');

    $id = $_POST['id'];
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $sql ="UPDATE `buyers` SET `name` ='$name', `contact`= '01751018490' , `email`='$email', `address`='$address', `gender`='$gender'  WHERE `id` = '$id'  LIMIT 1 ";
    $query = mysqli_query($conn,$sql);
    if($query){
        header('Location:../view/updatebuyer.php?msg="Updated Successfully!"');
    }