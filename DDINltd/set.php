<?php
include'header.php'
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
    /* Ensure the page uses the full viewport height and enables scrolling */
    html, body {
      height: 100%;
      margin: 0;
      padding: 0;
      overflow-y: auto;
      background-color: ;
    }

    /* Prevent content from being overlapped by the fixed header */
    body {
      padding-top: 80px; /* Adjust this based on the height of your header */
    }

    .main {
      min-height: 100vh; /* Ensure main content takes up full height */
    }

    .content {
      padding: 20px; /* Add some padding for better content spacing */
    }

    /* Optional styling for smoother scrolling */
    html {
      scroll-behavior: smooth;
    }

    /* Sidebar styling */
    .sidebar {
      width: 250px;
      position: fixed; /* Fix the sidebar on the left */
      top: 80px; /* Ensure it aligns with the fixed header */
      left: 0;
      height: 100vh; /* Full height of the viewport */
      overflow-y: auto; /* Enable scrolling if the content exceeds the viewport height */
       /* Light background */
      padding-top: 20px; /* Add some top padding */
    }

    .sidebar-nav .nav-link {
      padding: 10px 20px;
      display: flex;
      align-items: center;
    }

    .sidebar-nav .nav-link i {
      margin-right: 10px; /* Spacing between icon and text */
    }

    /* Make sure the main content doesn't overlap with the fixed sidebar */
    .main {
      margin-left: 250px; /* Adjust this based on the width of your sidebar */
    }

    /* Responsive sidebar: Hide sidebar on small screens and add toggle button */
    @media (max-width: 992px) {
      .sidebar {
        width: 100%;
        position: relative;
        height: auto;
      }

      .main {
        margin-left: 0;
      }
    }
  </style>
</head>

<body >

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar" style= "background-color: white;">
    <ul class="sidebar-nav" id="sidebar-nav">
      <li class="nav-item">
        <a class="nav-link" href="chang.php">
          <i class="bi bi-globe"></i> <!-- Internet/Globe icon for language change -->
          <span>Change Language</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="bi bi-toggle-on"></i> <!-- Power icon for theme toggle -->
          <span>Dark Theme</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Help.php">
          <i class="bi bi-question-circle"></i> <!-- Help icon -->
          <span>Help</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="bi bi-x-circle"></i> <!-- Circle with X for deactivation -->
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
          <div class="content">
            <!-- Content goes here -->
          </div>
        </div>
      </div>
    </section>
  </main><!-- End Main -->

  <!-- Bootstrap JS -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle


  <!-- Bootstrap JS -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js></script>
</body>

</html>
