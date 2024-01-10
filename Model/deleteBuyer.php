<?php 

    include('db.php');
    if(isset($_POST['get_id'])){
        $id = $_POST['get_id'];
        $sql ="DELETE FROM `buyers` WHERE `id` = '$id'  LIMIT 1 ";
        $query = mysqli_query($conn,$sql);
        if($query){
            header('Location:../view/deletebuyer.php?msg="Deleted Successfully!"');
        }
}