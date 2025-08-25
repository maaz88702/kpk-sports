<?php
// index.php - Homepage
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>KPK Sports</title>
    <link rel="stylesheet" href="style.css"> <!-- global -->
    <link rel="stylesheet" href="home.css">  <!-- homepage only -->
</head>
<body>
<header>
    <div class="logo">KPK Sports</div>
    <nav class="navbar">
        <ul class="nav-links">
            <li><a href="index.php" class="active">Home</a></li>
            <li><a href="products.php">Products</a></li>
            <li><a href="cart.php">Cart</a></li>
        </ul>
        <div class="menu-toggle" id="menu-toggle">&#9776;</div>
    </nav>
</header>


<!-- Hero Section -->
<section class="hero">
    <div class="hero-overlay">
        <h1>Welcome to <span>KPK Sports</span></h1>
        <p>Discover premium sports gear for every athlete in Khyber Pakhtunkhwa</p>
        <a href="products.php" class="btn">Shop Now</a>
    </div>
</section>

<!-- Sports Categories -->
<section class="categories">
    <h2>Explore Our Sports Categories</h2>
    <div class="category-grid">
        <div class="category-card">
            <img src="images/football.jpg" alt="Football">
            <h3>Football</h3>
        </div>
        <div class="category-card">
            <img src="images/cricket-bat.jpg" alt="Cricket">
            <h3>Cricket</h3>
        </div>
        <div class="category-card">
            <img src="images/gloves.jpg" alt="Boxing">
            <h3>Boxing</h3>
        </div>
        <div class="category-card">
            <img src="images/shoes.jpg" alt="Running">
            <h3>Running</h3>
        </div>
        <div class="category-card">
            <img src="images/basketball.jpg" alt="Basketball">
            <h3>Basketball</h3>
        </div>
        <div class="category-card">
            <img src="images/swimming.jpg" alt="Swimming">
            <h3>Swimming</h3>
        </div>
        <div class="category-card">
            <img src="images/cycling.jpg" alt="Cycling">
            <h3>Cycling</h3>
        </div>
    </div>
</section>

<!-- Featured Products -->
<section class="featured">
    <h2>Top Selling Products</h2>
    <div class="featured-grid">
        <div class="featured-card">
            <img src="images/football.jpg" alt="Football">
            <h3>Premium Football</h3>
            <p>Rs 2,500</p>
        </div>
        <div class="featured-card">
            <img src="images/cricket-bat.jpg" alt="Cricket Bat">
            <h3>Cricket Bat</h3>
            <p>Rs 4,500</p>
        </div>
        <div class="featured-card">
            <img src="images/gloves.jpg" alt="Boxing Gloves">
            <h3>Boxing Gloves</h3>
            <p>Rs 1,500</p>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="about">
    <h2>About KPK Sports</h2>
    <p>
        At KPK Sports, we aim to empower athletes with world-class sports equipment.  
        Our products are designed for **strength, comfort, and durability**, making sure you stay ahead in your game.  
        From professional players to beginners, we provide everything you need to succeed.  
    </p>
</section>

<!-- Testimonials -->
<section class="testimonials">
    <h2>What Our Customers Say</h2>
    <div class="testimonial-grid">
        <div class="testimonial-card">
            <p>"Best sports store in KPK! Quality products at great prices."</p>
            <h4>- Ahmed Khan</h4>
        </div>
        <div class="testimonial-card">
            <p>"I bought football gear and it’s amazing. Highly recommend KPK Sports!"</p>
            <h4>- Sarah Ali</h4>
        </div>
        <div class="testimonial-card">
            <p>"Fast delivery, great quality, and excellent service."</p>
            <h4>- Imran Gul</h4>
        </div>
    </div>
</section>

<!-- Newsletter -->
<section class="newsletter">
    <h2>Stay Updated</h2>
    <p>Subscribe to get the latest sports news & exclusive deals.</p>
    <form>
        <input type="email" placeholder="Enter your email" required>
        <button type="submit">Subscribe</button>
    </form>
</section>

<footer>
    <p>© <?php echo date("Y"); ?> KPK Sports. All Rights Reserved.</p>
</footer>
<!-- script -->
<script>
    const toggle = document.getElementById("menu-toggle");
    const navLinks = document.querySelector(".nav-links");
    toggle.addEventListener("click", () => {
        navLinks.classList.toggle("active");
    });
</script>

</body>
</html>
