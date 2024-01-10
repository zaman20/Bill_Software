<?php 

    include('db.php');
    $sql ="SELECT * FROM buyers";
    $query = mysqli_query($conn, $sql);
    $result = mysqli_num_rows($query);

