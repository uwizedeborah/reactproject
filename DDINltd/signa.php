<?php
include'header.php';
?><br><br>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DDIN Registration Form</title>
  
  <!-- Bootstrap CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- Custom CSS -->
  <style>
    .form-section {
      background-color: #f9f9f9;
      padding: 30px;
      border-radius: 8px;
      box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
    }

    .form-group {
      display: flex;
      align-items: center;
      margin-bottom: 15px;
    }

    .form-group label {
      width: 150px;
      margin-right: 15px;
    }

    .form-check-label {
      width: auto;
    }
  </style>
</head>

<body>

  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-lg-8 col-md-10 ">
        <div class="form-section bg-white">
          <h2 class="text-center mb-4">REGISTRACTION FORM</h2>
          <form action="register.php" method="POST">

            <!-- Full Name -->
            <div class="form-group">
              <label for="fullName">Full Name</label>
              <input type="text" class="form-control" id="fullName" name="fullName" placeholder="" required style="border-radius: 10px;">
            </div>

            <!-- Phone Number -->
            <div class="form-group">
              <label for="phone">Phone</label>
              <input type="text" class="form-control" id="phone" name="phone" placeholder="" style="border-radius: 10px;" required>
            </div>

            <!-- Birth Date -->
            <div class="form-group">
              <label for="birthdate">Birth Date</label>
              <input type="date" class="form-control" id="birthdate" name="birthdate" style="border-radius: 10px;"required>
            </div>

            <!-- ID Number -->
            <div class="form-group">
              <label for="idNumber">ID Number</label>
              <input type="text" class="form-control" id="idNumber" name="idNumber" placeholder="" style="border-radius: 10px;" required>
            </div>

            <!-- Next of Kin -->
            <div class="form-group">
              <label for="nextOfKin">Next of Kin</label>
              <input type="text" class="form-control" id="nextOfKin" name="nextOfKin" placeholder="" style="border-radius: 10px;" required>
            </div>

            <!-- Terms & Conditions -->
            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="terms" name="terms" required>
              <label class="form-check-label" for="terms"> <a href="#" target="_blank">Terms & Conditions</a></label>
            </div>

            <!-- Submit and Cancel Buttons -->
            <div class="d-flex justify-content-between">
               <button type="reset" class="btn" style="width:20%;margin-left: 30%;height: 3%; color:black;">Cancel</button>
              <button type="submit" class="btn btn-warning" style="width:30%;height: 3%; background-color: #f39c12; color: white; border-radius:10%;">Submit</button><br><br><br>

            </div>
            <p>Already have account<a href="login.php">login</a></p>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
