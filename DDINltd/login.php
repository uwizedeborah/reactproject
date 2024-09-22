<?php
include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>DDIN GROUP Ltd</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  
  <!-- Custom CSS for responsive login form -->
  <style>
    .login-container {
      background-color: #fff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
    }
    .login-container h2 {
      text-align: center;
      margin-bottom: 20px;
    }
    .login-container .btn {
      width: 100%;
    }
    .login-container .form-label {
      font-size: 1rem;
    }
    @media (max-width: 768px) {
      .login-container {
        padding: 20px;
      }
      .form-label {
        font-size: 0.9rem;
      }
      .register-text {
        text-align: center;
      }
    }
  </style>
</head>

<body class="header fixed-top bg-white">

  <main id="main" class="main">
    <section class="section dashboard">
      <div class="row justify-content-center">

        <!-- Center the login form on all screens -->
        <div class="col-lg-5 col-md-8 col-sm-10" style="margin-left:-20%">
          <img src="logd.png" class="d-block mx-auto mb-4" alt="Logo" style="max-width: 150px; margin-top: 6%;">
          
          <div class="login-container" style="margin-top: -5%;">
            <form method="POST" class="login-form">
              <h2>Login</h2>

              <!-- Phone input -->
              <div class="mb-3">
                <label for="number" class="form-label">Phone</label>
                <input type="number" class="form-control" id="email" name="phoneNumber" placeholder="Enter Phone number" required>
              </div>

              <!-- Password input -->
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
              </div>

              <!-- Forgot password -->
              <div class="d-flex justify-content-end">
                <a href="#" class="text-muted">Forgot password?</a>
              </div>

              <!-- Buttons -->
              <div class="d-flex justify-content-between mt-4">
                <button type="reset" class="btn " style="border-radius:10%;width: 30%;margin-left:40%;">Cancel</button>
               <button type="submit" class="btn" style="border-radius:10%; width: 80%; background-color:#f8882B;"> <a href="allservice.php">Login </a></button>
              </div>
              
              <!-- Signup link -->
              <div class="mt-3 register-text text-center">
                <p>Don't have an account? <a href="signup.php" class="text-primary">Signup</a></p>
              </div>
            </form>
          </div>
        </div><!-- End login form column -->

      </div>
    </section>
  </main><!-- End Main -->

  <!-- Bootstrap JS -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>
