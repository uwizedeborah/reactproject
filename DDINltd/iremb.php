<?php
    include 'header.php';
?><br><br>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Irembo Services</title>
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
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-bottom: 20px;
            padding: 10px;
        }
        .btn-custom:hover {
            background-color: #218838;
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
                <h1 class="text-center">IREMBO SERVICES</h1>
                <div class="image-container text-center mb-4 p-3" style="background-color:whitesmoke; border-radius:10px;">
                    <img src="irem.png" alt="Irembo Services" style="margin-left: -80%; height: auto;">
                    <p style="margin-top: -10%; margin-left: 25%;">Pay Irembo Services and get Special Discounts.</p>
                </div>

                <h6>Pay Irembo services:</h6>
                 <div style="background-color:whitesmoke; border-radius:10px;">
                <form id="iremboForm">
                    <!-- Bill ID -->
                    <div class="form-group">
                        <label for="billID">Bill ID:</label>
                        <input type="text" class="form-control" id="billID" placeholder="Enter Bill ID" required>
                    </div>

                    <!-- Telephone -->
                    <div class="form-group">
                        <label for="telephone">Telephone:</label>
                        <input type="tel" class="form-control" id="telephone" placeholder="Enter telephone number" required>
                    </div>

                    <!-- Submit button -->
                    <button type="submit" class="btn btn-custom" style="background-color:#f8882B; width:70%; margin-left:10%;">BUY</button>
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
        document.getElementById('iremboForm').addEventListener('submit', function(event) {
            event.preventDefault();
            alert('Processing Irembo payment!');
        });
    </script>

</body>
</html>
