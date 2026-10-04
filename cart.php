<?php
session_start();
if(!isset($_SESSION['user'])) {
    header("Location:index.php");
    exit();
}

// Add item to cart session
if(isset($_GET['item'])) {
    $newItem = [
        'name' => $_GET['item'],
        'price' => $_GET['price']
    ];
    $_SESSION['cart'][] = $newItem;
}

// Calculate total
$total = 0;
foreach($_SESSION['cart'] as $cartItem) {
    $total += $cartItem['price'];
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Cart</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="login-box">
<h2>🛒 Your Cart</h2>

<!-- Show all cart items -->
<?php foreach($_SESSION['cart'] as $cartItem): ?>
<div class="cart-item">
<span><?php echo $cartItem['name']; ?></span>
<span>₹<?php echo $cartItem['price']; ?></span>
</div>
<?php endforeach; ?>

<h3>Total: ₹<?php echo $total; ?></h3>

<a href="home.php">
<button>➕ Add More Items</button>
</a>

<form action="success.php" method="POST">
<input type="hidden" name="item" 
  value="<?php echo implode(', ', array_column($_SESSION['cart'], 'name')); ?>">
<input type="hidden" name="price" value="<?php echo $total; ?>">

<textarea name="address" 
  placeholder="Enter Delivery Address" required></textarea>

<select name="payment">
<option>Cash On Delivery</option>
<option>UPI</option>
<option>Credit Card</option>
</select>

<button type="submit">Place Order</button>
</form>

</div>
</body>
</html>