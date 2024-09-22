<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('Location: login.php');
    exit();
}

include 'connect.php'; // Include your database connection file

// Fetch user data
$email = $_SESSION['email'];
$stmt = $conn->prepare("SELECT name, email, username, profile_photo FROM users WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->bind_result($name, $email, $username, $profile_photo);
$stmt->fetch();
$stmt->close();

// Update user profile
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $new_name = $_POST['name'];
    $new_username = $_POST['username'];
    
    // Handle profile photo upload
    if (isset($_FILES['profile_photo']) && $_FILES['profile_photo']['error'] === UPLOAD_ERR_OK) {
        $uploadDir = 'uploads/';
        $uploadFile = $uploadDir . basename($_FILES['profile_photo']['name']);
        
        // Check for allowed file types (e.g., JPG, PNG)
        $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
        if (in_array($_FILES['profile_photo']['type'], $allowedTypes)) {
            // Move the uploaded file to the server's designated directory
            if (move_uploaded_file($_FILES['profile_photo']['tmp_name'], $uploadFile)) {
                $profile_photo = basename($_FILES['profile_photo']['name']);
            } else {
                echo "Failed to upload profile photo.";
                exit();
            }
        } else {
            echo "Invalid file type. Only JPG, PNG, and GIF are allowed.";
            exit();
        }
    }

    // If the user wants to change their password
    if (!empty($_POST['password'])) {
        $new_password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $stmt = $conn->prepare("UPDATE users SET name = ?, username = ?, password = ?, profile_photo = ? WHERE email = ?");
        $stmt->bind_param("sssss", $new_name, $new_username, $new_password, $profile_photo, $email);
    } else {
        $stmt = $conn->prepare("UPDATE users SET name = ?, username = ?, profile_photo = ? WHERE email = ?");
        $stmt->bind_param("ssss", $new_name, $new_username, $profile_photo, $email);
    }

    if ($stmt->execute()) {
        echo "Profile updated successfully!";
    } else {
        echo "Failed to update profile: " . $stmt->error;
    }

    $stmt->close();
    header('Location: profile.php');
    exit();
}
$conn->close();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Profile - Optimizing Agriculture Sustainable</title>
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <style type="text/css">
        .profile-photo {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    object-fit: cover;
    border: 2px solid #ddd; /* Optional: Adds a subtle border around the image */
}

    </style>
</head>
<body>
    <div class="container">
    <div class="profile-header">
    <?php if ($profile_photo): ?>
        <img src="uploads/<?php echo htmlspecialchars($profile_photo); ?>" alt="Profile Photo" class="profile-photo">
    <?php else: ?>
        <img src="assets/img/default-profile.png" alt="Profile Photo" class="profile-photo">
    <?php endif; ?>
    <h1><?php echo htmlspecialchars($name); ?></h1>
</div>

        <form method="POST" enctype="multipart/form-data" action="profile.php">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo htmlspecialchars($name); ?>" required>
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" value="<?php echo htmlspecialchars($username); ?>" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>" disabled>
            </div>
            <div class="mb-3">
                <label for="profile_photo" class="form-label">Profile Photo</label>
                <input type="file" class="form-control" id="profile_photo" name="profile_photo">
            </div>
            <button type="submit" class="btn btn-primary">Update Profile</button><a href="logout.php" class="btn btn-danger mt-3" style="margin-left: 50%;">Sign Out</a>
            <a href="dashboard.php" class="btn btn-secondary mt-3">Back to Dashboard</a>
        
        </form>
        
    </div>
</body>
</html>
