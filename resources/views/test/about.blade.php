@extends('layouts.app')

@section('content')
    <section class="about-section">
        <h1>About Us</h1>
        <p>Welcome to ShopEase! We're committed to providing you with a seamless and enjoyable shopping experience. 
           Our mission is to bring you quality products at competitive prices, with a focus on excellent customer service and convenience.</p>
        <h2>Our Values</h2>
        <ul>
            <li>Quality Products</li>
            <li>Customer Satisfaction</li>
            <li>Integrity and Transparency</li>
            <li>Commitment to Excellence</li>
        </ul>
        <p>Thank you for choosing ShopEase. We're here to serve you!</p>
    </section>
    <style>
        /* About Us Page */
.about-section ul {
    list-style-type: none;
    padding: 0;
}
.about-section ul li {
    background-color: #FF4500;
    color: white;
    padding: 0.5rem;
    margin: 0.5rem 0;
    border-radius: 5px;
}
    </style>
@endsection
