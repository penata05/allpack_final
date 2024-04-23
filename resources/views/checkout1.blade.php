<!DOCTYPE html>
<html lang="bg">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Плащане</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f9e3c2; /* Warm background color */
        }
        #checkout-container {
            text-align: center;
        }
        #checkout-text {
            font-size: 18px;
            margin-bottom: 20px;
        }
        #checkout-live-button {
            font-size: 16px;
            padding: 10px 20px;
            background-color: #ff8c00; /* Warm button color */
            color: #fff;
            border: none;
            border-radius: 50px; /* Make the button rounder */
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div id="checkout-container">
        <p id="checkout-text">Искате ли да продължите с плащането?</p>
        <form action="{{ route('session') }}" method="POST">
            @csrf
            <button type="submit" id="checkout-live-button">Плащане</button>
        </form>
    </div>
</body>
</html>
