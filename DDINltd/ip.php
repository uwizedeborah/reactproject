<?php
include'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NPO Client Registration</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        body {
            background-color: #f7f7f7;
        }
        .container {
            margin-top: 50px;
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
<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6" style="background-color:white;">
                <h2 class="text-center">NPO CLIENT REGISTRATION</h2>
                <img src="ip.png">
                <p class="text-center" style="margin-top: -10%;">Use NPO services with us</p><br>

                <form id="npoForm">
                    <!-- First Name -->
                    <div class="form-group">
                        <label for="firstName">First Name:</label>
                        <input type="text" class="form-control" id="firstName" placeholder="Enter first name" required>
                    </div>

                    <!-- Middle Name -->
                    <div class="form-group">
                        <label for="middleName">Middle Name:</label>
                        <input type="text" class="form-control" id="middleName" placeholder="Enter middle name">
                    </div>

                    <!-- Last Name -->
                    <div class="form-group">
                        <label for="lastName">Last Name:</label>
                        <input type="text" class="form-control" id="lastName" placeholder="Enter last name" required>
                    </div>

                    <!-- Email -->
                    <div class="form-group">
                        <label for="email">E-mail:</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter email" required>
                    </div>

                    <!-- Phone Number -->
                    <div class="form-group">
                        <label for="phoneNumber">Phone Number:</label>
                        <input type="tel" class="form-control" id="phoneNumber" placeholder="+250" required>
                    </div>

                    <!-- Select Identity Type -->
                    <div class="form-group">
                        <label for="identityType">Select Your Identity Type:</label>
                        <select class="form-control" id="identityType" required>
                            <option value="NATIONAL ID">NATIONAL ID</option>
                            <option value="NPO Client Identity Types">NPO Client Identity Types</option>
                        </select>
                    </div>

                    <!-- Identity Number -->
                    <div class="form-group">
                        <label for="identityNumber">Identity Number:</label>
                        <input type="text" class="form-control" id="identityNumber" placeholder="Enter identity number" required>
                    </div>

                    <!-- Choose Postal Office Code -->
                    <div class="form-group">
                        <label for="postalCode">Choose Postal Office Code:</label>
                        <select class="form-control" id="postalCode" required>
                            <option value="PO 001">PO 001</option>
                            <option value="PO 002">PO 002</option>
                            <option value="PO 003">PO 003</option>
                        </select>
                    </div>

                    <!-- Choose Client Type -->
                    <div class="form-group">
                        <label for="clientType">Choose Client Type:</label>
                        <select class="form-control" id="clientType" required>
                            <option value="Individual">Individual</option>
                            <option value="Business">Business</option>
                        </select>
                    </div>

                    <!-- Register Button -->
                    <button type="submit" class="btn btn-custom" style="background-color: #f8882B;">REGISTER</button>
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
        document.getElementById('npoForm').addEventListener('submit', function(event) {
            event.preventDefault();
            alert('Client registered successfully!');
            // Add your form submission logic here
        });
    </script>

</body>
</html>
