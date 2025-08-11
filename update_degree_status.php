<?php
include('include/auth.php'); // db connection

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['id']) && isset($_POST['status'])) {
    $id = $_POST['id'];
    $status = $_POST['status'];

    // Optional: Validate status value
    if (!in_array($status, ['Active', 'Inactive'])) {
        echo "Invalid status!";
        exit;
    }

    $stmt = $cn->prepare("UPDATE degree_information SET status = ? WHERE id = ?");
    if ($stmt) {
        $stmt->bind_param("si", $status, $id);
        if ($stmt->execute()) {
            echo "✅ Status updated to " . htmlspecialchars($status);
        } else {
            echo "❌ Error: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "❌ Prepare failed: " . $cn->error;
    }

    $cn->close();
} else {
    echo "❌ Invalid request";
}
?>


