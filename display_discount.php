<?php
$product_description =$_POST['product_description']; 
$retail_price =$_POST['list_price'];
$discount_rate =$_POST['discount_percent'];
$discount_amount =$retail_price * ($discount_rate)/100;
$discount_price =$retail_price - $discount_amount;
$discount_price_formatted = "$ ".$discount_price;
        $discount_rate_formatted = $discount_rate." %";
       	 $retail_price_formatted = "$ ".$retail_price;
	 $discount_amount_formatted = "$ ".$discount_amount;

?>

<!DOCTYPE html>
<html>
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    <main>
        <h1>Product Discount Calculator</h1>

        <label>Product Description:</label>
        <span><?php echo htmlspecialchars($product_description); ?></span><br>

        <label>List Price:</label>
        <span><?php echo htmlspecialchars($retail_price_formatted); ?></span><br>

        <label>Standard Discount:</label>
        <span><?php echo htmlspecialchars($discount_rate_formatted); ?></span><br>

        <label>Discount Amount:</label>
        <span><?php echo $discount_amount_formatted; ?></span><br>

        <label>Discount Price:</label>
        <span><?php echo $discount_price_formatted; ?></span><br>
    </main>
</body>
</html>
