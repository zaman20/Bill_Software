<?php 
    include('db.php');
    if(isset($_GET['bill'])){
        $id = $_GET['bill'];
        $sql="SELECT * FROM `invoice` WHERE `id` = '$id'";
        $query = mysqli_query($conn,$sql);
        $row = mysqli_fetch_row($query); 
        $count =0;
        $name = $row['1'];
        $contact = $row['2'];
        $total = $row['6'];
        
        $items = explode(',',$row['3']);
        $qtys = explode(',',$row['4']);
        $prices =explode(',',$row['5']);
        $num = $row['7'];
        $date = $row['8'];
    }
    
?>