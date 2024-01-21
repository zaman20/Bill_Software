<?php 

    include('db.php');
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $items = $_POST['items'];
    $qtys = $_POST['qtys'];
    $prices = $_POST['prices'];
    $total = $_POST['total'];
    $number = $_POST['number'];
    
    $sql ="INSERT INTO `invoice`(`buyer_name`, `buyer_phone`, `items`,`qtys`, `prices`,`total`,`number`) VALUES ('$name','$contact','$items','$qtys','$prices','$total','$number')";
    $query = mysqli_query($conn,$sql);

    
    if($query){
        $removeCart = "DELETE FROM cart"; 
        mysqli_query($conn,$removeCart);
        $max_id = mysqli_query($conn,"SELECT MAX(id) FROM invoice");
        $row =mysqli_fetch_row($max_id);
        $id = $row['0'];
        header('Location:../view/slip.php?bill='.$id);
    }