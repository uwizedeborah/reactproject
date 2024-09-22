<?php
include'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Airtime Purchase</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .airtime-form {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        .airtime-form h2 {
            text-align: center;
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
            padding: 10px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        .buy-btn:hover {
            background-color: #218838;
        }
        .discount-info {
            text-align: center;
            margin-top: 10px;
            color: #007bff;
        }
    </style>
</head>
<body>

    <div class="airtime-form">
        <h2>Buy Airtime</h2>
        <form id="airtimeForm">
            <div class="form-group">
                <label for="service">Choose Service</label>
                <select id="service" name="service" required>
                    <option value="airtel">Airtel (Special Discount)</option>
                    <option value="mtn">MTN</option>
                </select>
            </div>
            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="text" id="phone" name="phone" placeholder="Enter phone number" required>
            </div>
            <div class="form-group">
                <label for="airtime">Airtime Amount</label>
                <input type="number" id="airtime" name="airtime" placeholder="Enter amount" required>
            </div>
            <button type="button" class="buy-btn" onclick="buyAirtime()" style="background-color: #f8882B;">BUY</button>
        </form>
        <div class="discount-info" id="discountInfo">
            <!-- Discount info will be shown here if Airtel is selected -->
        </div>
    </div>

    <script>
        function buyAirtime() {
            const service = document.getElementById('service').value;
            const phone = document.getElementById('phone').value;
            const airtime = document.getElementById('airtime').value;
            const discountInfo = document.getElementById('discountInfo');

            // Simple validation
            if (phone === '' || airtime === '') {
                alert('Please fill in all fields.');
                return;
            }

            if (service === 'airtel') {
                discountInfo.innerHTML = "You've selected Airtel! Enjoy your special discount.";
            } else {
                discountInfo.innerHTML = '';
            }

            // Logic to handle the airtime purchase
            alert(`Service: ${service}\nPhone: ${phone}\nAirtime: ${airtime}`);
        }
    </script>

</body>
</html>
