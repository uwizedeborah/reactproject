<?php
include'header.php';
?><br><br><br>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bulk Payment Services</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .payment-form {
            background-color: #fff;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);
            width: 350px;
        }
        .payment-form h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 8px;
        }
        input[type="number"], select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .buy-btn {
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        .buy-btn:hover {
            background-color: #0056b3;
        }
        .info-text {
            text-align: center;
            margin-top: 15px;
            color: #555;
        }
    </style>
</head>
<body>

    <div class="payment-form">
        <h2>Bulk Payment Services</h2>
        <img src="b.png">
        <p class="info-text" style="margin-left: 40%;margin-top: -20%;">You can do bulk payment activities with us.</p>
        <form id="bulkPaymentForm">
            <div class="form-group">
                <label for="bulkService">Choose Bulk Payment Service</label>
                <select id="bulkService" name="bulkService" required>
                    <option value="service1">Service 1</option>
                    <option value="service2">Service 2</option>
                    <option value="service3">Service 3</option>
                </select>
            </div>
            <div class="form-group">
                <label for="amount">Amount to Pay</label>
                <input type="number" id="amount" name="amount" placeholder="Enter amount" required>
            </div>
            <button type="button" class="buy-btn" onclick="buyBulkPayment()" style="background-color: #f8882B;">BUY BULK PAYMENT</button>
        </form>
        <div class="info-text" id="purchaseInfo">
            <!-- Info about the bulk payment will appear here after submission -->
        </div>
    </div>

    <script>
        function buyBulkPayment() {
            const service = document.getElementById('bulkService').value;
            const amount = document.getElementById('amount').value;
            const purchaseInfo = document.getElementById('purchaseInfo');

            // Simple validation
            if (amount === '' || amount <= 0) {
                alert('Please enter a valid amount.');
                return;
            }

            // Logic to handle bulk payment purchase
            alert(`Bulk Payment Service: ${service}\nAmount: ${amount}`);
            purchaseInfo.innerHTML = `You have selected ${service} for a bulk payment of ${amount}.`;
        }
    </script>

</body>
</html>
