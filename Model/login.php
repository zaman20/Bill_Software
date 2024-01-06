<?php 
    include('db.php');
    $user_name = $_POST['uname'];
    $pass = $_POST['pass'];
    //echo $user_name;
    if($user_name =='admin' && $pass == 1234){
        header("Location:../view/dashboard.php");
    } 
    else{
        header("Location:../index.php?msg=Wrong Information");
    }

?>