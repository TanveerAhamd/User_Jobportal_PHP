<?php
include ('include/config.php');

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['id'])) {
    $id = $_POST['id'];

    $stmt = $cn->prepare("DELETE FROM job_experience WHERE id = ?");
    $stmt->bind_param("i", $id);
    
    if ($stmt->execute()) {
        header("Location:profile_builder_form_wizard.php"); // Refresh the table view
    } else {
        echo "Error deleting: " . $stmt->error;
    }

    $stmt->close();
    $cn->close();
}
?>
