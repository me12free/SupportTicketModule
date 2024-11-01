<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShopEase | Landing Page</title>
    <style>
        /* Add your CSS styles here */
    </style>
</head>
<body>

    <!-- Navigation Bar -->
    <nav class="navbar">
        <div class="logo">ShopEase</div>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/shop">Shop</a></li>
            <li><a href="/about">About Us</a></li>
            <li><a href="/contact">Contact</a></li>
            <li><a href="/cart">Cart</a></li>
        </ul>
    </nav>

    <!-- Main Content: Landing Page Hero Section -->
    <section class="hero">
        <h1>Welcome to ShopEase</h1>
        <p>Your one-stop shop for everything you need!</p>
        <button onclick="location.href='/shop'">Start Shopping</button>
    </section>

    <!-- Include the Support Form -->
    <x-support-form />

</body>
</html>
