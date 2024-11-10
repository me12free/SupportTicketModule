<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'ShopEase')</title>
    <style>
        /* Reset some default styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        /* Body Styling */
        body {
            background-color: #f4f4f4;
            color: #333;
        }

        /* Navbar Styling */
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

        /* Content Area Styling */
        .content {
            max-width: 1200px;
            margin: 2rem auto;
            padding: 1.5rem;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Support Form Styling */
        .support-form {
            margin-top: 1.5rem;
            padding: 1.5rem;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 10px;
        }

        /* Success Message Styling */
        .success-message {
            position: fixed;
            top: 20px;
            right: 20px;
            background: #4CAF50;
            color: white;
            padding: 15px;
            border-radius: 8px;
            font-size: 1rem;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
            animation: fadeInOut 4s ease-in-out;
        }
        @keyframes fadeInOut {
            0%, 100% { opacity: 0; }
            10%, 90% { opacity: 1; }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .navbar ul {
                flex-direction: column;
                gap: 0.5rem;
                background-color: #333;
                width: 100%;
                padding: 1rem;
                position: absolute;
                top: 3.5rem;
                left: 0;
                display: none;
            }
            .navbar ul.active {
                display: flex;
            }
            .navbar .toggle {
                display: inline;
                font-size: 1.2rem;
                cursor: pointer;
                color: #fff;
            }
        }
    </style>
</head>
<body>

    <!-- Navigation Bar -->
    <nav class="navbar">
        <div class="logo">ShopEase</div>
        <div class="toggle" onclick="document.querySelector('.navbar ul').classList.toggle('active')">&#9776;</div>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/shop">Shop</a></li>
            <li><a href="/about">About Us</a></li>
            <li><a href="/contact">Contact</a></li>
            <li><a href="/cart">Cart</a></li>
        </ul>
    </nav>

    <!-- Main Content Area -->
    <div class="content">
        @yield('content')
    </div>

    <!-- Support Form Component -->
    <x-support-form />

    <!-- Success Message -->
    @if (session('success'))
    <div class="success-message">
        {{ session('success') }}
    </div>
    @endif

    <script>
        // JavaScript to toggle the mobile menu
        document.querySelector('.toggle').addEventListener('click', function() {
            document.querySelector('.navbar ul').classList.toggle('active');
        });
    </script>
</body>
</html>
