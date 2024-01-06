<?php 
    include('db.php');
    $user_name = $_POST['user_name'];
    $pass = $_POST['password'];

    if($user_name = 'admin' && $pass =='1234'){
        header("Location:../dashboard.php");
    } 
    else{
        header("Location:../index.php?msg=Wrong Information");
    }

?>