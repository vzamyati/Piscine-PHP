<!DOCTYPE html>
<html>
<head>
    <title>Cart</title>
    <link rel="stylesheet" href="./css/main_page.css" />
    <link rel="stylesheet" href="./css/cart.css" />
    <link rel="stylesheet" href="fonts.css" />
</head>
<body>
    <?php
        include "header.php";
        include "install.php";
        include "cart_manager.php";
    ?>

<?php  
    if(!empty($_SESSION["cart"])) {
?>
<h3 align="center">Order Details</h3>  
    <div class="table-responsive card-table">  
    <table class="table table-bordered">  
        <tr>
            <th width="20%">Item</th>
            <th width="20%">Item Name</th>  
            <th width="10%">Quantity</th>  
            <th width="20%">Price</th>  
            <th width="15%"><b>Total</b></th>  
            <th width="5%">Action</th>  
        </tr>  
        <?php   
                $total = 0;  
                foreach($_SESSION["cart"] as $keys => $values) {  
        ?>  
                    <tr>  
                        <td><?php echo '<img src="'.$values['item_image'].'"alt=""" />';?></td>
                        <td><?php echo $values["item_name"]; ?></td>  
                        <td><?php echo $values["item_quantity"]; ?></td>  
                        <td>$ <?php echo $values["item_price"]; ?></td>  
                        <td>$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>  
                        <td><a href="cart.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
                        <input type="hidden" name="h_id" value="<?php echo $row["item_id"]; ?>" />
                    </tr>  
        <?php  
                    $total = $total + ($values["item_quantity"] * $values["item_price"]);  
                }
        ?>  
        <tr>  
            <td colspan="4" align="right" style="text-decoration: underline;">Total</td>  
            <td align="right"><b>$ <?php echo number_format($total, 2); ?></b></td>  
            <td></td>  
        </tr>
        <tr>  
            <td colspan="6" align="right"><a href="thanks.php"><input type="submit" name="purchase" value="Purchase"></a></td>
            <td></td>  
        </tr> 
<?php  
    }
    else {
        echo '<p>Your Cart Is Empty!</p><p>Buy Some Cackes!</p>';
    }
?>  
    </table>  
    </div> 
</body>
</html>