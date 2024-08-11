<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Payment</title>
</head>
<body>
    <form id="payment-form" method="post" action="<?= base_url('initiate') ?>">
        <label for="name">Name:</label>
        <input type="text" class="mt-5" id="name" name="name" required><br>

        <label for="email">Email:</label>
        <input type="email" class="mt-5" id="email" name="email" required><br>

        <label for="contact">Contact:</label>
        <input type="text" id="contact" name="contact" required><br>

        <label for="amount">Amount:</label>
        <input type="number" id="amount" name="amount" value="6999" required><br>

        <button type="submit" class="mt-5">Pay Now</button>
    </form>
</body>
</html>
