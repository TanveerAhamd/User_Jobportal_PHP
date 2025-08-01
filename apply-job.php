<?php
session_start();
include ('include/config.php'); // Your DB connection
if (!isset($_SESSION['user_id'])) {
    header("Location: appliedjobs.php");
    exit();
}


if (isset($_POST['apply']) && isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
    $job_title = $_POST['job_title'];
    $department = $_POST['department'];
    $project = $_POST['project'];
    $province = $_POST['province'];
    $last_date = $_POST['last_date'];

    $stmt = $conn->prepare("INSERT INTO applied_jobs (user_id, job_title, department, project, province, last_date) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("isssss", $user_id, $job_title, $department, $project, $province, $last_date);
    $stmt->execute();

    header("Location: applied-list.php?success=1");
    exit();
} else {
    echo "Invalid access.";
}
?>
