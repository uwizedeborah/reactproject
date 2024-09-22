<?php
include'header.php';
?><br><br>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equity Services</title>
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
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-bottom: 20px;
        }
        .btn-custom:hover {
            background-color: #0056b3;
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
<body style="background-color: white;">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6"  style="background-color:whitesmoke;">
                <h1 class="text-center">EQUITY SERVICES</h1>
                <div class="image-container text-center mb-4" style="background-color:white;border-radius: 10px;">
                    <img src="eqt.png" alt="Equity Services" style="margin-left: -60%;"><br>
                    
                </div>
                <div style="margin-top:-15%;margin-left:40%;">
                    <p style="margin-top: 0%; ">Pay Equity services with us.</p>
                    </div><br><br>
                <h6>Pay Equity services:</h6>
<div style="background-color: white; border-radius:5%;">
                <form id="equityForm">
                    <!-- Equity Code -->
                    <div class="form-group">
                        <label for="equityCode">Equity Code:</label>
                        <input type="text" class="form-control" id="equityCode" placeholder="Enter Equity payment code" required>
                    </div>

                    <!-- Amount to Pay -->
                    <div class="form-group">
                        <label for="amount">Amount to Pay:</label>
                        <input type="number" class="form-control" id="amount" placeholder="Enter amount to pay" required>
                    </div>

                    <!-- Submit button -->
                    <button type="submit" class="btn btn-custom" style="background-color:#f8882B;width:80%;margin-left: 10%;">BUY</button>
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
        document.getElementById('equityForm').addEventListener('submit', function(event) {
            event.preventDefault();
            alert('Processing Equity service payment!');
        });
    </script>

</body>
</html>
