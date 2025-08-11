<?php
include ('include/auth.php');

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST" && (isset($_POST['save_degree_info']) || isset($_POST['update_degree_info']))) {

    // Collect and sanitize form data
    $degree_level = $_POST['degree_level'];
    $degree = $_POST['degree'];
    $institute = $_POST['institute'];
    $major_subjects = $_POST['major_subjects'];
    $start_date = $_POST['start_date'];
    $completion_date = $_POST['completion_date'];
    $country = $_POST['country'];
    $marks_percentage = $_POST['marks_percentage'];
    $position_holder = $_POST['position_holder'];
    $grading_criteria = $_POST['grading_criteria'];
    $degree_verification_number = $_POST['degree_verification_number'];
    
    // Check if it's an update (degree_id is set)
    if (!empty($_POST['degree_id'])) {
    $id = $_POST['degree_id']; // Map to correct variable

    $sql = "UPDATE degree_information 
            SET degree_level = ?, degree = ?, institute = ?, major_subjects = ?, 
                start_date = ?, completion_date = ?, country = ?, marks_percentage = ?, position_holder = ? 
            WHERE id = ?";

    $stmt = $cn->prepare($sql);
    if ($stmt) {
        $stmt->bind_param("sssssssssi", $degree_level, $degree, $institute, $major_subjects, $start_date, $completion_date, $country,$marks_percentage,$position_holder, $id);
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
}
else {
        // ✅ INSERT New Experience
        $sql = "INSERT INTO degree_information (degree_level, degree, institute, major_subjects, start_date,completion_date, country, marks_percentage,position_holder)
                VALUES ('$degree_level' , '$degree', '$institute', '$major_subjects', '$start_date','$completion_date', '$country', '$marks_percentage','$position_holder')";

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




 