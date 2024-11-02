@extends('layouts.app')

@section('content')
    <section class="cart-section">
        <h1>Your Cart</h1>
        <p>Here are the items you've added to your cart. Ready to checkout? Click below to proceed with your purchase!</p>
        
        <!-- Example of Cart Items -->
        <div class="cart-items">
            <div class="cart-item">
                <img src="https://via.placeholder.com/100" alt="Product Image">
                <div class="item-details">
                    <h3>Product Name</h3>
                    <p>Quantity: 1</p>
                    <p>Price: $20.00</p>
                </div>
                <button class="remove-button">Remove</button>
            </div>
            <!-- Add more items here as needed -->
        </div>
        <button class="checkout-button">Proceed to Checkout</button>
    </section>
@endsection
<style>
    /* Cart Page */
.cart-items {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
}
.cart-item {
    display: flex;
    align-items: center;
    margin-bottom: 1rem;
}
.cart-item img {
    width: 80px;
    height: 80px;
    margin-right: 1rem;
}
.cart-item .item-details {
    flex-grow: 1;
}
.remove-button, .checkout-button {
    background-color: #FF4500;
    color: white;
    padding: 0.5rem 1rem;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}
.remove-button:hover, .checkout-button:hover {
    background-color: #e03e00;
}
</style>