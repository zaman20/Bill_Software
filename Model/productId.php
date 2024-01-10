<?php 

    include('db.php');
    $sql ="SELECT MAX(id) FROM products";
    $query = mysqli_query($conn,$sql);
    $row = mysqli_fetch_row($query);
    $highest_id = $row[0];
    echo $highest_id + 1;