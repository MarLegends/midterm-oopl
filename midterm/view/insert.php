<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
    require("../classes/order.php");

    if (isset($_POST['submit'])) {
        $quantity = (int) $_POST['quantity'];  // Convert quantity to integer
        $name = $_POST['name'];
        $price = (float) $_POST['price'];      // Convert price to float
        $payment = $_POST['payment'];
        $delivery = $_POST['delivery'];
        $total = $price * $quantity;           // Perform the multiplication after conversion

        $orders = new Orders();

        // Call the insertquery method and pass the form data
        $result = $orders->insertquery($quantity, $name, $price, $payment, $delivery, $total);
        
        if ($result) {
            header('location:view_order.php');
        } else {
            echo "Failed to insert order.";
        }
    }
?>
</body>
</html>
