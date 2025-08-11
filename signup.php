<?php
include 'include/config.php'; // ✅ Include your database connection

if (isset($_POST['user_register_btn'])) {
    // Collect and sanitize form data
    $user_register_name = $cn->real_escape_string($_POST['user_register_name']);
    $user_register_email = $cn->real_escape_string($_POST['user_register_email']);
    $user_register_password = password_hash($_POST['user_register_password'], PASSWORD_DEFAULT); // Secure password hashing

    // Check if email already exists
    $check = $cn->query("SELECT * FROM signup WHERE user_register_email = '$user_register_email'");
    if ($check->num_rows > 0) {
        echo "<script>alert('⚠️ Email already registered. Please try another.'); window.history.back();</script>";
        exit();
    }

    // Insert new user
    $query = "INSERT INTO signup (user_register_name, user_register_email, user_register_password) VALUES ('$user_register_name', '$user_register_email', '$user_register_password')";

    if ($cn->query($query) === TRUE) {
        $_SESSION['user_register_btn'] = $user_register_email; // optional: to show name on dashboard
        header("Location: dashboard.php");
        exit();
    } else {    
        echo "❌ Error: " . $query . "<br>" . $cn->error;
    }
}
?>
