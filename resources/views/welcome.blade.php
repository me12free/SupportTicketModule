<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShopEase | Landing Page</title>
    <style>
        /* Reset styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        /* Body styling */
        body {
            background-color: #f4f4f4;
            color: #333;
            overflow-x: hidden;
        }

        /* Navbar styling */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #333;
            padding: 1rem 2rem;
            color: #fff;
        }
        .navbar .logo {
            font-size: 1.5rem;
            font-weight: bold;
            color: #FF4500;
        }
        .navbar ul {
            list-style: none;
            display: flex;
            gap: 1.5rem;
        }
        .navbar ul li a {
            color: #fff;
            text-decoration: none;
            font-size: 1rem;
            transition: color 0.3s ease;
        }
        .navbar ul li a:hover {
            color: #FF4500;
        }

        /* Hero section styling */
        .hero {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url('https://via.placeholder.com/1500'); /* Replace with a real image URL */
            background-size: cover;
            background-position: center;
            color: white;
            text-align: center;
            padding: 2rem;
            background-blend-mode: overlay;
            background-color: rgba(0, 0, 0, 0.5);
        }
        .hero h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
            color: #FF4500;
        }
        .hero p {
            font-size: 1.25rem;
            margin-bottom: 2rem;
        }
        .hero button {
            background-color: #FF4500;
            color: white;
            border: none;
            padding: 0.75rem 1.5rem;
            font-size: 1rem;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .hero button:hover {
            background-color: #e03e00;
        }

        /* Responsive styling */
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2.5rem;
            }
            .hero p {
                font-size: 1rem;
            }
        }
        
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
