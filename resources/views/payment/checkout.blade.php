<!DOCTYPE html>
<html lang="en">
<head>
    <title>Checkout</title>
    <script src="https://your-mpgs-script.js"></script>
</head>
<body>
    <form id="payment-form" action="/payment/callback" method="POST">
        <input type="hidden" name="sessionId" value="{{ $sessionId }}">
        <button type="submit">Pay Now</button>
    </form>
    <script>
        // Initialize MPGS Hosted Checkout
        // Use MPGS session ID and payment form here.
    </script>
</body>
</html>
