<!DOCTYPE html>
<html>
<head>
  <title>Create Webpage to Read Details</title>
</head>
<body>
  <h1>Enter Product Details</h1>
  <form method="post">
    <label for="item_code">Item Code:</label><br>
    <input type="text" id="item_code" name="item_code"><br>
    <label for="description">Description:</label><br>
    <input type="text" id="description" name="description"><br>
    <label for="unit_price">Unit Price:</label><br>
    <input type="number" id="unit_price" name="unit_price"><br>
    <label for="quantity">Quantity:</label><br>
    <input type="number" id="quantity" name="quantity"><br><br>
    <input type="submit" value="Submit">
  </form>
<?php

$item_code = $_POST['item_code'];
$description = $_POST['description'];
$unit_price = $_POST['unit_price'];
$quantity = $_POST['quantity'];


$amount_paid = $unit_price * $quantity;

if ($amount_paid > 1500) {
  $discount = 0.1;
} elseif ($amount_paid > 1000) {
  $discount = 0.05;
} else {
  $discount = 0;
}

$amount_paid = $amount_paid - ($amount_paid * $discount);

echo "<h1>Product Details</h1>";
echo "<ul>";
echo "<li>Item Code: $item_code</li>";
echo "<li>Description: $description</li>";
echo "<li>Unit Price: $unit_price</li>";
echo "<li>Quantity: $quantity</li>";
echo "<li>Amount Paid: $amount_paid</li>";
echo "</ul>";
?>
</body>
</html>