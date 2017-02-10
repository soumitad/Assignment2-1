<?php
$product_description =$_POST['product_description']; 
$retail_price =$_POST['list_price'];
$discount_rate =$_POST['discount_percent'];


?>

<!DOCTYPE html>
<html>
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    <main>
        <h1>This page is under construction</h1>

        <label>Product Description:</label>
        <span><?php echo $product_description; ?></span><br>

        <label>List Price:</label>
        <span><?php echo $retail_price; ?></span><br>

        <label>Standard Discount:</label>
        <span><?php echo $discount_rate; ?></span><br>

        <label>Discount Amount:</label>
        <span><?php echo ''; ?></span><br>

        <label>Discount Price:</label>
        <span><?php echo ''; ?></span><br>
    </main>
</body>
</html>
