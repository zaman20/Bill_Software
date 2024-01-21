<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details </title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="main-container">
       <?php include('menu.php') ?>

       <div class="form-wrapper">
        <div class="title">
            <img src="../img/product details ani.gif" alt=""> 
        </div>
            <?php include('../model/slip.php');?>
            <div style="margin-bottom:5px;">
                <label for="">Customer-Name: <?php echo $name?> | </label>
                <label for="">Phone: <?php echo $contact?></label>
            </div>
            <table>
                <tr>
                    <th>SL</th>
                    <th>Items</th>
                    <th>Rate</th>
                    <th>Qty</th>
                    <th>Total</th>
                </tr>
                <?php for($i=0;$i<$num;$i++){ $count++;?>
                    <tr>
                        <td><?php echo $count;?></td>
                        <td><?php echo $items[$i]?></td>
                        <td><?php echo $prices[$i]?></td>
                        <td><?php echo $qtys[$i]?></td>
                        <td><?php echo $qtys[$i] * $prices[$i]?></td>
                    </tr>
                <?php }?>
                <tr>
                    <td colspan="4">Total: </td>
                    <td><?php echo $total;?></td>
                </tr>
            </table>

            <button class="print-btn">Print</button>
       </div>

    </div>

    <script src="../js/jquery.js"></script>
    <script src="../js/scripts.js"></script>
</body>
</html>