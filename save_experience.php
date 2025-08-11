<?php
include('include/auth.php');

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['savebtn'])) {
    // Collect and sanitize form data
    $position_title = $_POST['position_title'];
    $from_date = $_POST['from_date'];
    $to_date = $_POST['to_date'];
    $company_name = $_POST['company_name'];
    $job_level = $_POST['job_level'];
    $country = $_POST['country'];
    $jobDesc = $_POST['jobDesc'];

    // Check if it's an update (experience_id is set)
    if (!empty($_POST['experience_id'])) {
        $id = $_POST['experience_id']; // Map to correct variable

        $sql = "UPDATE job_experience 
            SET position_title = ?, from_date = ?, to_date = ?, company_name = ?, 
                job_level = ?, country = ?, jobDesc = ? 
            WHERE id = ?";

        $stmt = $cn->prepare($sql);
        if ($stmt) {
            $stmt->bind_param("sssssssi", $position_title, $from_date, $to_date, $company_name, $job_level, $country, $jobDesc, $id);
            if ($stmt->execute()) {
                echo "✅ Experience updated successfully!";
                header("Location:profile_builder_form_wizard.php");
                exit();
            } else {
                echo "❌ Update failed: " . $stmt->error;
            }
            $stmt->close();
        } else {
            echo "❌ Prepare failed (Update): " . $cn->error;
        }
    } else {
        // ✅ INSERT New Experience
        $sql = "INSERT INTO job_experience (position_title, from_date, to_date, company_name, job_level, country, jobDesc)
                VALUES ('$position_title' , '$from_date', '$to_date', '$company_name', '$job_level', '$country', '$jobDesc')";

        $stmt = $cn->prepare($sql);
        if ($stmt) {
            // $stmt->bind_param("sssssss", $position_title, $from_date, $to_date, $company_name, $job_level, $country, $jobDesc);
            if ($stmt->execute()) {
                echo "✅ New experience added successfully!";
                header("Location:profile_builder_form_wizard.php");
                exit();
            } else {
                echo "❌ Insert failed: " . $stmt->error;
            }
            $stmt->close();
        } else {
            echo "❌ Prepare failed (Insert): " . $cn->error;
        }
    }

    // Close connection
    $cn->close();
}
?>




