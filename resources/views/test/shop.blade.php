@extends('layouts.app')

@section('content')
    <section class="shop-section">
        <h1>Shop</h1>
        <p>Explore our wide range of products, handpicked to meet your needs. Happy shopping!</p>
        
        <!-- Sample Products -->
        <div class="product-grid">
            <div class="product-item">
                <img src="https://via.placeholder.com/150" alt="Product Image">
                <h3>Product Name</h3>
                <p>Price: $25.00</p>
                <button class="add-to-cart-button">Add to Cart</button>
            </div>
            <div class="product-item">
                <img src="https://via.placeholder.com/150" alt="Product Image">
                <h3>Product Name</h3>
                <p>Price: $30.00</p>
                <button class="add-to-cart-button">Add to Cart</button>
            </div>
            <!-- Add more products as needed -->
        </div>
    </section>
@endsection

<style>
    /* Shop Page */
.product-grid {
    display: flex;
    flex-wrap: wrap;
    gap: 1rem;
    justify-content: center;
}
.product-item {
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 5px;
    padding: 1rem;
    width: 150px;
    text-align: center;
}
.product-item img {
    width: 100%;
    border-radius: 5px;
}
.add-to-cart-button {
    background-color: #FF4500;
    color: white;
    padding: 0.5rem;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    margin-top: 0.5rem;
}
.add-to-cart-button:hover {
    background-color: #e03e00;
}
</style>