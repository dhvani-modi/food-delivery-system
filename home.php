<?php
session_start();

if(!isset($_SESSION['user']))
{
    header("Location:index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Food Menu</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<div class="header">
<h1>Welcome <?php echo $_SESSION['user']; ?> 🍕</h1>
<h3>Choose according to your craving</h3>
</div>

<div class="food-grid">

<div class="card">
<img src="https://images.unsplash.com/photo-1568901346375-23c9450c58cd">
<div class="card-body">
<h2>Burger</h2>
<p>Fast Food</p>
<p class="price">₹149</p>
<a href="cart.php?item=Burger&price=149">
<button>Add To Cart</button>
</a>
</div>
</div>

<div class="card">
<img src="https://images.unsplash.com/photo-1513104890138-7c749659a591">
<div class="card-body">
<h2>Pizza</h2>
<p>Cheesy</p>
<p class="price">₹299</p>
<a href="cart.php?item=Pizza&price=299">
<button>Add To Cart</button>
</a>
</div>
</div>

<div class="card">
<img src="https://i1.wp.com/thetwincookingproject.net/wp-content/uploads/2020/05/Homemade-Dominos-Garlic-Bread_-scaled.jpg?resize=1024%2C1536&ssl=1">
<div class="card-body">
<h2>Garlic Bread</h2>
<p>Fast Food</p>
<p class="price">₹129</p>
<a href="cart.php?item=Burger&price=129">
<button>Add To Cart</button>
</a>
</div>
</div>

<div class="card">
<img src="https://cdn.uengage.io/uploads/64261/image-591513-1754044989.jpeg">
<div class="card-body">
<h2>Peri Peri Fries</h2>
<p>Fast Food</p>
<p class="price">₹120</p>
<a href="cart.php?item=PerPeriFries&price=120">
<button>Add To Cart</button>
</a>
</div>
</div>

<div class="card">
<img src="https://tastesbetterfromscratch.com/wp-content/uploads/2020/03/Penne-Arrabbiata-1-2-500x500.jpg">
<div class="card-body">
<h2>Arabia Pasta</h2>
<p>Fast Food</p>
<p class="price">₹230</p>
<a href="cart.php?item=ArabiaPasta&price=230">
<button>Add To Cart</button>
</a>
</div>
</div>

<div class="card">
<img src="https://t4.ftcdn.net/jpg/05/82/97/27/240_F_582972760_T0T4qTwlZDolGql8CJaD1kMIPrG4vIew.jpg">
<div class="card-body">
<h2>Coke</h2>
<p>Beverages</p>
<p class="price">₹60</p>
<a href="cart.php?item=coke&price=60">
<button>Add To Cart</button>
</a>
</div>
</div>

<div class="card">
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSZuirY0disqjlsJAbpprs3j-SKp0dgER55UA&s">
<div class="card-body">
<h2>Pepsi</h2>
<p>Beverages</p>
<p class="price">₹60</p>
<a href="cart.php?item=pepsi&price=60">
<button>Add To Cart</button>
</a>
</div>
</div>

<div class="card">
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS-DEWT0uYQaxlzQwDFa3q1j40rXcBG1Qgmcw&s">
<div class="card-body">
<h2>Thumbs-up</h2>
<p>Beverages</p>
<p class="price">₹60</p>
<a href="cart.php?item=ThumbsUp&price=60">
<button>Add To Cart</button>
</a>
</div>
</div>

<div class="card">
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTKmJm0rG-zXmoNW6hLSrfO_GjR5nIU3NrY_Q&s">
<div class="card-body">
<h2>Sprite</h2>
<p>Beverages</p>
<p class="price">₹60</p>
<a href="cart.php?item=Sprite&price=60">
<button>Add To Cart</button>
</a>
</div>
</div>

<div class="card">
<img src="https://5.imimg.com/data5/SELLER/Default/2023/3/QP/FF/NX/185760377/spiece-butter-milk-masala-chass--500x500.jpg">
<div class="card-body">
<h2>Chass</h2>
<p>Beverages</p>
<p class="price">₹30</p>
<a href="cart.php?item=Chass&price=30">
<button>Add To Cart</button>
</a>
</div>
</div>

<div class="card">
<img src="gulab.png">
<div class="card-body">
<h2>Gulab Jamun</h2>
<p>Sweet/Dessert</p>
<p class="price">₹99</p>
<a href="cart.php?item=GulabJamun&price=99">
<button>Add To Cart</button>
</a>
</div>
</div>

<div class="card">
<img src="https://eatsbyramya.com/wp-content/uploads/2024/10/rasmalai_can_recipe-1920x1920.jpg">
<div class="card-body">
<h2>Ras Malai</h2>
<p>Sweet/Dessert</p>
<p class="price">₹120</p>
<a href="cart.php?item=RasMalai&price=120">
<button>Add To Cart</button>
</a>
</div>
</div>

</div>

</div>

</body>
</html>