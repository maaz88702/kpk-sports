<?php
// Example cart items (replace later with PHP session data)
$cart_items = [
    ["id"=>1,"name"=>"Football","price"=>2500,"qty"=>2,"image"=>"images/football.jpg"],
    ["id"=>2,"name"=>"Cricket Bat","price"=>4500,"qty"=>1,"image"=>"images/cricket-bat.jpg"],
    ["id"=>3,"name"=>"Boxing Gloves","price"=>1500,"qty"=>3,"image"=>"images/gloves.jpg"]
];

// Calculate subtotal
$subtotal = 0;
foreach($cart_items as $item){
    $subtotal += $item['price'] * $item['qty'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>KPK Sports - Cart</title>
    <link rel="stylesheet" href="style.css">   <!-- global -->
    <link rel="stylesheet" href="cart.css">    <!-- cart only -->
</head>
<body>
<header>
    <div class="logo">KPK Sports</div>
    <nav class="navbar">
        <ul class="nav-links">
            <li><a href="index.php">Home</a></li>
            <li><a href="products.php">Products</a></li>
            <li><a href="cart.php" class="active">Cart</a></li>
        </ul>
        <div class="menu-toggle" id="menu-toggle">&#9776;</div>
    </nav>
</header>

<!-- Cart Section -->
<section class="cart-section">
    <h1>Your Shopping Cart</h1>

    <?php if(count($cart_items) > 0): ?>
    <div class="cart-table">
        <table>
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Item</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($cart_items as $item): ?>
                <tr>
                    <td><img src="<?php echo $item['image']; ?>" alt="<?php echo $item['name']; ?>"></td>
                    <td><?php echo $item['name']; ?></td>
                    <td>Rs <?php echo number_format($item['price']); ?></td>
                    <td>
                        <input type="number" value="<?php echo $item['qty']; ?>" min="1">
                    </td>
                    <td>Rs <?php echo number_format($item['price'] * $item['qty']); ?></td>
                    <td><a href="#" class="remove-btn">✖</a></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <div class="cart-summary">
        <h2>Cart Summary</h2>
        <p>Subtotal: <span>Rs <?php echo number_format($subtotal); ?></span></p>
        <a href="#" class="checkout-btn">Proceed to Checkout</a>
    </div>
    <?php else: ?>
        <p class="empty">Your cart is empty.</p>
    <?php endif; ?>
</section>

<footer>
    <p>© <?php echo date("Y"); ?> KPK Sports. All Rights Reserved.</p>
</footer>

<script>
    const toggle = document.getElementById("menu-toggle");
    const navLinks = document.querySelector(".nav-links");
    toggle.addEventListener("click", () => {
        navLinks.classList.toggle("active");
    });
</script>
</body>
</html>
