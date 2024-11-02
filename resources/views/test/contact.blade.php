@extends('layouts.app')

@section('content')
    <section class="contact-section">
        <h1>Contact Us</h1>
        <p>If you have any questions, feedback, or concerns, please don’t hesitate to reach out to us. We’d love to hear from you!</p>
        
        <form action="/submit-contact" method="POST" class="contact-form">
            @csrf
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
            
            <label for="message">Message</label>
            <textarea id="message" name="message" rows="5" required></textarea>
            
            <button type="submit" class="submit-button">Send Message</button>
        </form>
    </section>
@endsection

<style>
    /* Contact Us Page */
.contact-form {
    display: flex;
    flex-direction: column;
    gap: 1rem;
    max-width: 600px;
    margin: 0 auto;
    text-align: left;
}
.contact-form label {
    font-weight: bold;
}
.contact-form input, .contact-form textarea {
    padding: 0.5rem;
    border: 1px solid #ccc;
    border-radius: 5px;
}
.submit-button {
    background-color: #FF4500;
    color: white;
    padding: 0.5rem 1rem;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}
.submit-button:hover {
    background-color: #e03e00;
}
</style>