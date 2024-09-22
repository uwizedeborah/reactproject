<?php
include 'header.php';
?><br><br>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>DDIN GROUP Ltd - Services</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
<style>
  /* Main Section Styles */
  .services-section {
    padding: 60px 0;
    background-color: #f8f9fa;
  }

  .service-card {
    background-color: white;
    padding: 10px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s;
    height: 120px; /* Fixed height for cards */
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .service-card img {
    width: 100%;
    max-height: 250px; /* Adjust maximum height */
    object-fit: cover;
    border-radius: 8px;
  }

  .service-card:hover {
    transform: translateY(-10px);
  }

  /* Media Queries for Responsive Design */
  @media (max-width: 768px) {
    .service-card {
      margin-bottom: 20px;
    }

    .service-card img {
      max-height: 200px; /* Adjust for smaller devices */
    }
  }
  
  /* Media Queries for Responsive Design */
@media (max-width: 576px) {
    .service-card {
      margin-bottom: 20px;
      background-color: white;
      padding: 10px;
      height: 120px; /* Adjust card height for smaller screens */
      display: flex;
      justify-content: center;
      align-items: center;
      border-radius: 8px;
      transition: transform 0.3s;
    }
}


    .service-card img {
      max-height: 150px; /* Adjust image height for mobile */
    }
  }
</style>

</head>

<body>
  <!-- Main Content -->
<main class="main">
  <!-- Services Section -->
  <section class="services-section">
    <div class="container">
      <h2 class="text-center mb-5">DDIN SERVICES</h2>
      <div class="row">

        <!-- Service 1 -->
        <div class="col-4 col-sm-4 col-md-4 mb-4">
          <div class="service-card text-center">
            <a href="bul.php"><img src="bu.png" alt="Service 1"></a>
          </div>
        </div>

        <!-- Service 2 -->
        <div class="col-4 col-sm-4 col-md-4 mb-4">
          <div class="service-card text-center">
            <a href="bk.php"><img src="bk.png" alt="Service 2"></a>
          </div>
        </div>

        <!-- Service 3 -->
        <div class="col-4 col-sm-4 col-md-4 mb-4">
          <div class="service-card text-center">
            <a href="iremb.php"><img src="irem.png" alt="Service 3"></a>
          </div>
        </div>

          <!-- Service 4 -->
          <div class="col-4 col-sm-4 col-md-4 mb-4">
            <div class="service-card text-center">
              <a href="rra.php"><img src="rra.png" alt="Service 4"></a>
            </div>
          </div>

          <!-- Service 5 -->
          <div class="col-4 col-sm-4 col-md-4 mb-4">
            <div class="service-card text-center">
             <a href="m.php"> <img src="m.png" alt="Service 5"></a>
            </div>
          </div>

          <!-- Service 6 -->
          <div class="col-4 col-sm-4 col-md-4 mb-4">
            <div class="service-card text-center">
             <a href="eqt.php"> <img src="eqt.png" alt="Service 6"></a>
            </div>
          </div>

          <!-- Service 7 -->
          <div class="col-4 col-sm-4 col-md-4 mb-4">
            <div class="service-card text-center">
              <a href="mtn.php"><img src="mtn.png" alt="Service 7"></a>
            </div>
          </div>

          <!-- Service 8 -->
          <div class="col-4 col-sm-4 col-md-4 mb-4">
            <div class="service-card text-center">
             <a href="b.php" > <img src="b.png" alt="Service 8"></a>
            </div>
          </div>

          <!-- Service 9 -->
          <div class="col-4 col-sm-4 col-md-4 mb-4">
            <div class="service-card text-center">
              <a href="startime.php"><img src="sta.png" alt="Service 9"></a>
            </div>
          </div>

          <!-- Service 10 -->
          <div class="col-4 col-sm-4 col-md-4 mb-4">
            <div class="service-card text-center">
              <a href="air.php"><img src="air.png" alt="Service 10"></a>
            </div>
          </div>

          <!-- Service 11 -->
          <div class="col-4 col-sm-4 col-md-4 mb-4">
            <div class="service-card text-center">
              <a href="ip.php"><img src="ip.png" alt="Service 11"></a>
            </div>
          </div>

          <!-- Service 12 -->
          <div class="col-4 col-sm-4 col-md-4 mb-4">
            <div class="service-card text-center">
              <a href="eua.php"><img src="ud.png" alt="Service 12"></a>
            </div>
          </div>

        </div>
      </div>
    </section>
  </main>

  <!-- Bootstrap JS -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>
