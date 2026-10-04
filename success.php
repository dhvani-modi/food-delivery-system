<?php
session_start();
$item = $_POST['item'];
$price = $_POST['price'];
$address = $_POST['address'];
$payment = $_POST['payment'];

unset($_SESSION['cart']);
?>

<!DOCTYPE html>
<html>
<head>
<title>Order Success</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="success">
<div class="success-box">

<h1>✅ Order Placed Successfully</h1>
<h2><?php echo $item; ?></h2>
<p><b>Amount:</b> ₹<?php echo $price; ?></p>
<p><b>Payment:</b> <?php echo $payment; ?></p>
<p><b>Address:</b> <?php echo $address; ?></p>
<br>
<h2>🚀 Your food is being prepared!</h2>

<!-- ADD THIS BUTTON -->
<a href="home.php">
<button class="home-btn">🏠 Back to Home</button>
</a>

</div>
</div>
</body>
</html>