<?php
include'header.php';
?><br><br>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electricity Token Services</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .token-form {
            background-color: #fff;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            width: 350px;
        }
        .token-form h2 {
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

    <div class="token-form">
        <h2>Electricity Token Purchase</h2>
        <img src="ud.png">
        <p class="info-text" style="margin-top: -10%; margin-left:30%;">Buy Electricity Token with Special Discounts.</p><br>
        <form id="tokenForm">
            <div class="form-group">
                <label for="meterNumber">Meter Number</label>
                <input type="text" id="meterNumber" name="meterNumber" placeholder="Enter meter number" required>
            </div>
            <div class="form-group">
                <label for="tokenAmount">Token Amount</label>
                <input type="number" id="tokenAmount" name="tokenAmount" placeholder="Enter token amount" required>
            </div>
            <button type="button" class="buy-btn" onclick="buyToken()" style="background-color: #f8882B;">BUY</button>
        </form>
        <div class="discount-info" id="discountInfo"></div>
    </div>

    <script>
        function buyToken() {
            const meterNumber = document.getElementById('meterNumber').value;
            const tokenAmount = document.getElementById('tokenAmount').value;
            const discountInfo = document.getElementById('discountInfo');

            // Simple validation
            if (!meterNumber || !tokenAmount || tokenAmount <= 0) {
                alert('Please fill in all fields with valid information.');
                return;
            }

            // Display discount information
            discountInfo.innerHTML = "Congratulations! You're eligible for a special discount on your electricity token purchase.";

            // Simulate purchase logic
            alert(`Meter Number: ${meterNumber}\nToken Amount: ${tokenAmount}`);
        }
    </script>

</body>
</html>
