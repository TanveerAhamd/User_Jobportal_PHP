<?php
session_start();
session_unset(); // Remove all session variables
session_destroy(); // Destroy the session

// Optionally delete the session cookie (very important for complete destruction)
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Redirect to login page
header("Location: index.php");
exit();
?>
