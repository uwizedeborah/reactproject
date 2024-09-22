<?php
include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $verificationCode = $_POST['verificationCode'];

    // Check verification code
    $stmt = $conn->prepare("SELECT * FROM login WHERE email = ? AND verificationCode = ?");
    $stmt->bind_param("ss", $email, $verificationCode);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Update user status to verified
        $updateStmt = $conn->prepare("UPDATE login SET isVerified = 1 WHERE email = ?");
        $updateStmt->bind_param("s", $email);

        if ($updateStmt->execute()) {
            echo "Verification successful!";
        } else {
            echo "Verification failed: " . $updateStmt->error;
        }
        $updateStmt->close();
    } else {
        echo "Invalid verification code.";
    }

    $stmt->close();
    $conn->close();
}
?>
