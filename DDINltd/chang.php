<?php
include 'header.php'
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

    /* Sidebar styling */
    .sidebar {
      width: 250px;
      position: fixed;
      top: 80px;
      left: 0;
      height: 100vh;
      overflow-y: auto;
      background-color: ;
      padding-top: 20px;
      transition: transform 0.3s ease; /* Smooth transition for opening/closing */
      transform: translateX(0); /* Default visible */
    }

    /* Hide sidebar by default on smaller screens */
    .sidebar-hidden {
      transform: translateX(-100%); /* Move sidebar out of view */
    }

    .sidebar-nav .nav-link {
      padding: 10px 20px;
      display: flex;
      align-items: center;
      color: black;
    }

    .sidebar-nav .nav-link i {
      margin-right: 10px;
    }

    .main {
      margin-left: 250px;
    }

    /* Responsive sidebar: Hide sidebar and add toggle button on small screens */
    @media (max-width: 992px) {
      .sidebar {
        transform: translateX(-100%);
      }

      .main {
        margin-left: 0;
      }

      /* Show the sidebar toggle button */
      .sidebar-toggle-btn {
        display: inline-block;
      }
    }

    /* Initially hide the toggle button */
    .sidebar-toggle-btn {
      display: none;
      position: fixed;
      top: 20px;
      left: 20px;
      color: black;
      border: none;
      padding: 10px 15px;
      cursor: pointer;
      border-radius: 5px;
    }

  </style>
</head>

<body>

  <!-- Sidebar Toggle Button -->
  <button class="sidebar-toggle-btn" id="sidebarToggle">Menu</button>

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">
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

  <main id="main" class="main">
    <section class="section dashboard">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <div class="form-container">
            <h3>CHOOSE LANGUAGE</h3>
            <form>
              <div class="form-check mb-3">
                <input class="form-check-input" type="radio" name="language" id="languageEnglish" value="en" checked>
                <label class="form-check-label" for="languageEnglish">
                  English
                </label>
              </div>
              <div class="form-check mb-3">
                <input class="form-check-input" type="radio" name="language" id="languageKinyarwanda" value="rw">
                <label class="form-check-label" for="languageKinyarwanda">
                  Kinyarwanda
                </label>
              </div>
              <div class="form-check mb-3">
                <input class="form-check-input" type="radio" name="language" id="languageFrench" value="fr">
                <label class="form-check-label" for="languageFrench">
                  French
                </label>
              </div>
              <button type="button" class="btn btn-primary" id="confirmButton">Confirm</button>
            </form>
          </div>
        </div>
      </div>
    </section>
  </main><!-- End Main -->

  <!-- Bootstrap JS -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Language Change Script -->
  <script>
    const translations = {
      en: {
        message: "You have selected English."
      },
      rw: {
        message: "Mwahisemo Ikinyarwanda."
      },
      fr: {
        message: "Vous avez sélectionné le Français."
      }
    };

    document.getElementById('confirmButton').addEventListener('click', function () {
      const selectedLanguage = document.querySelector('input[name="language"]:checked').value;
      alert(translations[selectedLanguage].message);
    });

    // Sidebar toggle functionality
    const sidebar = document.getElementById('sidebar');
    const toggleBtn = document.getElementById('sidebarToggle');

    toggleBtn.addEventListener('click', function () {
      sidebar.classList.toggle('sidebar-hidden');
    });
  </script>
</body>

</html>
