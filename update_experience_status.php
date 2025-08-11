<?php 
include('include/auth.php'); // DB connection

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['id']) && isset($_POST['status'])) {
    $id = $_POST['id'];
    $status = $_POST['status'];

    // Validate status
    if (!in_array($status, ['Active', 'Inactive'])) {
        echo "Invalid status!";
        exit;
    }

    $stmt = $cn->prepare("UPDATE job_experience SET status = ? WHERE id = ?");
    if ($stmt) {
        $stmt->bind_param("si", $status, $id);
        if ($stmt->execute()) {
            echo "✅ Status updated to " . htmlspecialchars($status);
        } else {
            echo "❌ Error executing: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "❌ Error preparing: " . $cn->error;
    }

    $cn->close();
} else {
    echo "❌ Invalid request";
}
?>
