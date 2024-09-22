<?php
include'header.php';
?><br><br>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MTN Services</title>
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
            width: 100px;
            height: auto;
        }
        .image-container p {
            font-size: 16px;
            color: #666;
        }
        .btn-custom {
            width: 100%;
            background-color: #ffcc00;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-bottom: 20px;
        }
        .btn-custom:hover {
            background-color: #e6b800;
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
            color: #ffcc00;
            text-decoration: none;
        }
        .footer-icons a:hover {
            color: #e6b800;
        }
    </style>
</head>
<body style="background-color: white;">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6" style="background-color:whitesmoke; ">
                <h1 class="text-center">MTN SERVICES</h1>
                <div class="image-container text-center mb-4" style="border-radius: 5%;background-color: white;">
                    <img src="mtn.png" alt="MTN Services" style="margin-left: -60%;"><br>
                </div>
<div style="margin-left:30%;margin-top: -20%;">
                    <p>Buy MTN Airtime and get special discounts.</p>
                    </div><br><br>
                <h6>Buy MTN Airtime:</h6>
               <div style="background-color:white;border-radius: 5px;">
                <form id="mtnForm">
                    <!-- Phone Number -->
                    <div class="form-group">
                        <label for="phoneNumber">Phone Number:</label>
                        <input type="tel" class="form-control" id="phoneNumber" placeholder="Enter phone number" required>
                    </div>

                    <!-- Airtime to Pay -->
                    <div class="form-group">
                        <label for="airtime">Airtime to Pay:</label>
                        <input type="number" class="form-control" id="airtime" placeholder="Enter airtime amount" required>
                    </div>

                    <!-- Submit button -->
                    <button type="submit" class="btn btn-custom" style="width:80%; background-color:#f8882B; margin-left:10%">BUY</button>
                </form>
            </div>
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
        document.getElementById('mtnForm').addEventListener('submit', function(event) {
            event.preventDefault();
            alert('Processing MTN Airtime payment!');
        });
    </script>

</body>
</html>
