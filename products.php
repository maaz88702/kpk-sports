<?php
$products = [
    ["id"=>1,"name"=>"Football","price"=>2500,"image"=>"images/football.jpg"],
    ["id"=>2,"name"=>"Cricket Bat","price"=>4500,"image"=>"images/cricket-bat.jpg"],
    ["id"=>3,"name"=>"Boxing Gloves","price"=>1500,"image"=>"images/gloves.jpg"],
    ["id"=>4,"name"=>"Running Shoes","price"=>3500,"image"=>"images/shoes.jpg"],
    ["id"=>5,"name"=>"Basketball","price"=>2800,"image"=>"images/basketball.jpg"],
    ["id"=>6,"name"=>"Swimming Goggles","price"=>1200,"image"=>"images/swimming.jpg"],
    ["id"=>7,"name"=>"Cycling Helmet","price"=>3000,"image"=>"images/cycling.jpg"]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>KPK Sports - Products</title>
    <link rel="stylesheet" href="style.css">  <!-- global -->
    <link rel="stylesheet" href="products.css"> <!-- products only -->
</head>
<body>
<header>
    <div class="logo">KPK Sports</div>
    <nav class="navbar">
        <ul class="nav-links">
            <li><a href="index.php">Home</a></li>
            <li><a href="products.php" class="active">Products</a></li>
            <li><a href="cart.php">Cart</a></li>
        </ul>
        <div class="menu-toggle" id="menu-toggle">&#9776;</div>
    </nav>
</header>

<!-- Banner -->
<section class="products-hero">
    <h1>Our Sports Products</h1>
    <p>Choose from a wide variety of high-quality sports gear</p>
</section>

<!-- Product Grid -->
<section class="products-section">
    <div class="product-grid">
        <?php foreach($products as $product): ?>
            <div class="product-card">
                <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>">
                <h3><?php echo $product['name']; ?></h3>
                <p class="price">Rs <?php echo number_format($product['price']); ?></p>
                <a href="cart.php?add=<?php echo $product['id']; ?>" class="btn">Add to Cart</a>
            </div>
        <?php endforeach; ?>
    </div>
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
