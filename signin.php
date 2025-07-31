<?php
session_start();
include 'include/config.php'; // ✅ Include your database connection

if (isset($_POST['user_login_btn'])) {
    $user_register_email = $cn->real_escape_string($_POST['user_register_email']);
    $user_register_password = $_POST['user_register_password'];

    $query = "SELECT * FROM signup WHERE user_register_email = '$user_register_email' LIMIT 1";
    $result = $cn->query($query);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if (password_verify($user_register_password, $row['user_register_password'])) {
            $_SESSION['user_register_btn'] = $row['user_register_name']; // Save user name in session
            header("Location:dashboard.php");
            exit();
        } else {
            echo "<script>alert('❌ Incorrect password'); window.history.back();</script>";
            exit();
        }
    } else {
        echo "<script>alert('⚠️ Email not registered'); window.history.back();</script>";
        exit();
    }
}
?>
