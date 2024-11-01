<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'ShopEase')</title>
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

    <!-- Main Content Area -->
    <div class="content">
        @yield('content')
    </div>

    <!-- Support Form Component -->
    <x-support-form />
    @if (session('success'))
    <div style="position: fixed; top: 20px; right: 20px; background: #4CAF50; color: white; padding: 10px; border-radius: 8px;">
        {{ session('success') }}
    </div>
@endif

</body>
</html>
