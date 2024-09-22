<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Group Header Example</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,700&display=swap" rel="stylesheet">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom Styles -->
  <style>
    body {
      font-family: 'Nunito', sans-serif;
    }

.navbar {
  background-color: #2c3e50;
  height: 100px; /* Set base height for larger screens */
  padding: 0; /* Remove extra padding */
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  display: flex;
  align-items: center; /* Vertically center content */
  justify-content: space-between; /* Space items evenly */
}

.navbar-brand img {
  width: 50%;
  height: auto;
  max-height: 70%; /* Keep the logo size within the header */
}

/* Responsive adjustments */
@media (max-width: 768px) {
  .navbar {
    height: auto; /* Let the header adapt to content on smaller screens */
    padding: 0.5rem 1rem;
  }

  .navbar-brand img {
    width: 220px; /* Scale down logo size for mobile */
    max-height: 70px;
  }

  .nav-link {
    font-size: 14px; /* Adjust font size for mobile screens */
  }
}

.nav-link {
  color: #fff;
  font-weight: 500;
  padding: 0.5rem 1rem;
  transition: color 0.3s ease;
  font-size: 16px; /* Base font size */
}

.nav-link:hover {
  color: #f39c12;
}

.sign-in-btn {
  background-color: #f39c12;
  color: white;
  border-radius: 30px;
  padding: 0.5rem 1.5rem;
  transition: background-color 0.3s ease;
}

.sign-in-btn:hover {
  background-color: #d35400;
}

/* Mobile adjustments */
@media (max-width: 768px) {
  .navbar-collapse {
    justify-content: center;
  }
}

a {
  color: white;
}

    a{
      color: white;
    }
  </style>
</head>

<body>

  <!-- Group Header -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
      <!-- Logo -->
      <a class="navbar-brand" href="#">
        <img src="logo2.png" alt="Group Logo" style="width:30%;height:50%">
      </a>

      <!-- Toggle button for mobile -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Links for navigation -->
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item" >
            <a class="nav-link " href="dashboard.php"><i class="bi bi-house-door"></i> Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php"> <i class="bi bi-info-circle"></i>About Us</a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="set.php"><i class="bi bi-gear"></i>Settings</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php"> <i class="bi bi-box-arrow-in-right"></i>login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="signup.php"><i class="bi bi-person-plus"></i>Signup</a>
          </li>
        </ul>

      </div>
    </div>
  </nav>
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
