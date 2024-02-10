<?php 

    include('db.php');
    if(isset($_POST['get_id'])){
        $id = $_POST['get_id'];
        $pid = $_POST['get_pid'];
        $stock = $_POST['get_stock'];

        $sql ="DELETE FROM `cart` WHERE `id` = '$id'  LIMIT 1 ";
        $query = mysqli_query($conn,$sql);

        if($query){
            $sql2 = "UPDATE products SET stock ='$stock' WHERE id ='$pid'";
            $query2 = mysqli_query($conn,$sql2);
            header('Location:../view/billmaking.php');
        }
}