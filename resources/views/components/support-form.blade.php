<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Support Form</title>
    <style>
        /* Style for the floating button and form */
        .support-float-button {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 50%;
            font-size: 16px;
            cursor: pointer;
            z-index: 1000;
        }

        .support-form-container {
            position: fixed;
            bottom: 80px;
            right: 20px;
            background: #fff;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            width: 250px;
            display: none; /* Hidden by default */
            z-index: 1000;
        }

        .support-form-container h4 {
            margin-top: 0;
        }

        /* Styling for form elements */
        label {
            display: block;
            margin: 10px 0 5px;
        }

        textarea, input[type="tel"], select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button[type="submit"] {
            background: #4CAF50; 
            color: white; 
            padding: 8px 12px; 
            border: none; 
            border-radius: 4px; 
            cursor: pointer;
            width: 100%;
        }
    </style>
</head>
<body>
    <!-- Floating button to open the support form -->
    <button class="support-float-button" onclick="toggleSupportForm()">Support</button>

    <!-- Support form container -->
    <div class="support-form-container" id="supportForm">
        <h4>Support</h4>
        <form action="{{ route('support.store') }}" method="POST">
        @csrf
            <label for="issue">Issue:</label>
            <textarea id="issue" name="issue" rows="3" required></textarea>

            <label for="country_code">Country Code:</label>
            <select id="country_code" name="country_code" required onchange="updatePhonePlaceholder()">
                <option value="+1">+1 (USA)</option>
                <option value="+44">+44 (UK)</option>
                <option value="+91">+91 (India)</option>
                <option value="+254">+254 (Kenya)</option>
                <!-- Add more countries as needed -->
            </select>

            <<label for="phone">Phone:</label>
            <input type="tel" id="phone" name="phone_number" required placeholder="Enter phone number">


            <button type="submit">Submit</button>
        </form>
    </div>

    <script>
        // Toggle display of the support form
        function toggleSupportForm() {
            const form = document.getElementById('supportForm');
            form.style.display = (form.style.display === 'none' || form.style.display === '') ? 'block' : 'none';
        }

        // Update phone placeholder based on selected country code
        function updatePhonePlaceholder() {
            const countryCode = document.getElementById('country_code').value;
            const phoneInput = document.getElementById('phone');

            // Set placeholders for each country (example values)
            switch (countryCode) {
                case '+1':
                    phoneInput.placeholder = 'e.g., 123-456-7890';
                    break;
                case '+44':
                    phoneInput.placeholder = 'e.g., 07123 456789';
                    break;
                case '+91':
                    phoneInput.placeholder = 'e.g., 91234 56789';
                    break;
                case '+254':
                    phoneInput.placeholder = 'e.g., 712 345678';
                    break;
                default:
                    phoneInput.placeholder = 'Enter phone number';
            }
        }
    </script>
</body>
</html>
