<?php
include'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Startimes Subscription Services</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .subscription-form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.1);
            width: 350px;
        }
        .subscription-form h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"], input[type="number"], select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .buy-btn {
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
        .buy-btn:hover {
            background-color: #0056b3;
        }
        .discount-info {
            text-align: center;
            color: #28a745;
            margin-top: 10px;
        }
    </style>
</head>
<body>

    <div class="subscription-form">
        <h2>Startimes Subscription</h2>
        <img src="sta.png">
        <p class="info-text" style="margin-left: 30%; margin-top:-25%;">Buy Startimes Subscription with Special Discounts.</p><br>
        <form id="subscriptionForm">
            <div class="form-group">
                <label for="service">Choose TV Subscription</label>
                <select id="service" name="service" required>
                    <option value="startimes">Startimes (Special Discount)</option>
                    <option value="other">Other TV Subscription</option>
                </select>
            </div>
            <div class="form-group">
                <label for="subscriberNumber">Subscriber Number</label>
                <input type="text" id="subscriberNumber" name="subscriberNumber" placeholder="Enter subscriber number" required>
            </div>
            <div class="form-group">
                <label for="amount">Subscription Amount</label>
                <input type="number" id="amount" name="amount" placeholder="Enter amount" required>
            </div>
            <button type="button" class="buy-btn" onclick="buySubscription()" style="background-color: #f8882B;">BUY</button>
        </form>
        <div class="discount-info" id="discountInfo"></div>
    </div>

    <script>
        function buySubscription() {
            const service = document.getElementById('service').value;
            const subscriberNumber = document.getElementById('subscriberNumber').value;
            const amount = document.getElementById('amount').value;
            const discountInfo = document.getElementById('discountInfo');

            // Basic validation
            if (!subscriberNumber || !amount || amount <= 0) {
                alert('Please fill in all the fields with valid information.');
                return;
            }

            // Handle discount info for Startimes
            if (service === 'startimes') {
                discountInfo.innerHTML = "Congratulations! You're eligible for a special discount on Startimes.";
            } else {
                discountInfo.innerHTML = '';
            }

            // Simulate purchase logic
            alert(`Service: ${service}\nSubscriber Number: ${subscriberNumber}\nAmount: ${amount}`);
        }
    </script>

</body>
</html>
