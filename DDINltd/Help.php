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
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <style>
    html, body {
      height: 100%;
      margin: 0;
      padding: 0;
    }

    .main {
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      padding-top: 80px;
      background-color: white;
    }

    /* Sidebar styling */
    .sidebar {
      width: 250px;
      position: fixed;
      top: 80px;
      left: 0;
      height: 100vh;
      overflow-y: auto;
      background-color: #f8f9fa;
      padding-top: 20px;
    }

    .sidebar-nav .nav-link {
      padding: 10px 20px;
      display: flex;
      align-items: center;
    }

    .sidebar-nav .nav-link i {
      margin-right: 10px;
    }

    .main {
      margin-left: 250px;
    }

    /* Hide sidebar on small screens */
    @media (max-width: 992px) {
      .sidebar {
        display: none;
      }
      .main {
        margin-left: 0;
        width: 100%;
      }
    }

    /* Styling for the help form */
    .form-container {
      background-color: #f8f9fa;
      padding: 30px;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      max-width: 600px;
      width: 100%;
    }

    .form-container h3 {
      text-align: center;
      margin-bottom: 20px;
    }

    .form-container img {
      display: block;
      margin: 0 auto;
    }

    .form-container .form-group {
      margin-bottom: 15px;
    }

    .form-container label {
      font-weight: bold;
    }

    .form-container .btn {
      width: 100%;
      background-color: #007bff;
      color: white;
    }

    @media (min-width: 1200px) {
      .form-container {
        max-width: 800px;
      }
    }

    /* Optional smooth scrolling */
    html {
      scroll-behavior: smooth;
    }

  </style>
</head>

<body>

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
      <li class="nav-item">
        <a class="nav-link" href="chang.php">
          <i class="bi bi-globe"></i>
          <span>Change Language</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="bi bi-toggle-on"></i>
          <span>Dark Theme</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Help.php">
          <i class="bi bi-question-circle"></i>
          <span>Help</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="bi bi-x-circle"></i>
          <span>De-activate Account</span>
        </a>
      </li>
    </ul>
  </aside><!-- End Sidebar -->

  <!-- Main Content -->
  <main id="main" class="main">
    <section class="section dashboard">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <div class="form-container" style="width:150%; margin-left: -30%;">
            <h3>HELP</h3>
            <img src="he.png" alt="Help Icon" class="img-fluid" style="width: 200px; margin-bottom: 20px;">

            <form action="" method="post">
              <div class="form-group">
                <label for="fullname">Name</label>
                <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Enter your name">
              </div>

              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
              </div>

              <div class="form-group">
                <label for="question">Question</label>
                <textarea class="form-control" id="question" name="question" rows="4" placeholder="Enter your question"></textarea>
              </div>

              <button type="submit" class="btn "style="background-color: #f8882B;">Send</button>
            </form>
          </div>
        </div>
      </div>
    </section>
  </main><!-- End Main -->

  <!-- Bootstrap JS -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>
