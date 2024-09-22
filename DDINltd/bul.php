<?php
include 'header.php';
?>
<br><br><br>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bulk SMS Service</title>
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
            background-color: orangered;
            color: white;
            border: none;
            margin-top: 15px;
            border-radius: 5px;
            cursor: pointer;
            margin-bottom: 20px;
        }
        .btn-custom:hover {
            background-color: darkred;
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
                <h1 class="text-center">BULK SMS SERVICE</h1>
                <div class="image-container text-center mb-4 p-3" style="background-color:whitesmoke; border-radius:5px;">
                    <img src="bu.png" alt="Subscription" style="margin-left: -80%;">
                    <p style="margin-left:30%;margin-top: -16%;">Buy Startimes Subscription with Special Discounts.</p>
                </div>

                <h6>Send message:</h6>
                <div style="border-radius: 10px;">
                    <form id="smsForm">
                        <!-- Add recipients -->
                        <div class="form-group">
                            <label for="recipients">Add Recipients:</label>
                            <input type="tel" class="form-control" id="recipients" placeholder="(+250)" multiple required>
                        </div>

                        <!-- Use phone catalog -->
                        <div class="form-group">
                            <label for="phoneCatalog">Use your phone catalog:</label><br>
                            <button type="button" class="btn btn-custom" style="width:30%;">Start</button>
                        </div>

                        <!-- Upload file option -->
                        <div class="form-group">
                            <label for="uploadFile">Add Recipients List (CSV or Excel):</label>
                            <input type="file" class="form-control-file" id="uploadFile" accept=".csv, .xls, .xlsx">
                        </div>
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
        document.getElementById('smsForm').addEventListener('submit', function(event) {
            event.preventDefault();
            alert('Messages are being sent!');
        });
    </script>

</body>
</html>
