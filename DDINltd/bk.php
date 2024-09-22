<?php
include 'header.php';
?><br><br>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BK Services</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f7f7f7;
        }
        .container {
            margin-top: 50px;
        }
        .image-container img {
            max-width: 100%;
            height: auto;
        }
        .image-container p {
            font-size: 16px;
            color: #666;
        }
        .btn-custom {
            width: 100%;
            background-color: green;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-bottom: 20px;
            padding: 10px;
        }
        .btn-custom:hover {
            background-color: darkgreen;
        }
        .footer-icons {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background-color: #fff;
            box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.1);
            padding: 10px 0;
            display: flex;
            justify-content: space-around;
        }
        .footer-icons a {
            font-size: 24px;
            color: #007bff;
            text-decoration: none;
        }
        .footer-icons a:hover {
            color: #0056b3;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6 bg-white p-4">
                <h2 class="text-center">BK SERVICES</h2>
                <div class="image-container text-center mb-4 p-3" style="background-color:whitesmoke;">
                    <img src="bk.png" alt="BK Services" style="margin-left: -80%;">
                    <p style="margin-top: -10%;">Pay BK Services and get Special Discounts.</p>
                </div>

                <h6>Pay BK services:</h6>
                <div style="background-color:whitesmoke; border-radius: 5px;">
                <form id="bkForm">
                    <!-- Enter code -->
                    <div class="form-group">
                        <label for="code">Code:</label>
                        <input type="text" class="form-control" id="code" placeholder="Enter payment code" required>
                    </div>

                    <!-- Enter amount -->
                    <div class="form-group">
                        <label for="amount">Amount to pay:</label>
                        <input type="number" class="form-control" id="amount" placeholder="Enter amount" required>
                    </div>

                    <!-- Submit button -->
                    <button type="submit" class="btn btn-custom" style="background-color:#f8882B; width: 70%; margin-left: 10%;">BUY</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Footer with icons -->
    <div class="footer-icons">
        <a href="#menu"><i class="fas fa-bars"></i></a>
        <a href="#home"><i class="fas fa-home"></i></a>
    </div>

    <!-- Bootstrap JS and Font Awesome for icons -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <script>
        document.getElementById('bkForm').addEventListener('submit', function(event) {
            event.preventDefault();
            alert('Payment in progress!');
        });
    </script>

</body>
</html>
