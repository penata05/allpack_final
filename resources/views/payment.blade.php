<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stripe Payment Form</title>
</head>
<body>
    <h1>Make a Payment</h1>
    <form action="{{ route('process.payment') }}" method="POST">
        @csrf
        <label for="card_number">Card Number:</label>
        <input type="text" id="card_number" name="card_number" placeholder="Enter card number" required>
        <!-- Other input fields (expiration date, CVV, etc.) go here -->
        <button type="submit">Pay Now</button>
    </form>
</body>
</html>
