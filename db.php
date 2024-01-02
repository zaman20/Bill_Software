<?php 
    $server = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'bill';

    $conn = mysqli_connect($server,$user,$pass,$db);
    if($conn){
        echo "Connected Successfully";
    }

?>