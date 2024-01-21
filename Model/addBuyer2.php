<?php 

    include('db.php');
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];

    $sql ="INSERT INTO `buyers`(`name`, `contact`, `email`, `address`, `gender`) VALUES ('$name','$contact','$email','$address','$gender')";
    $query = mysqli_query($conn,$sql);
    if($query){
        header('Location:../view/billmaking.php?msg="Buyer Added Successfully!"');
    }