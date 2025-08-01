<?php
session_start();
include('include/config.php'); // Your DB connection
if (!isset($_SESSION['user_id'])) {
    header("Location: apply-job.php");
    exit();
}

$user_id = $_SESSION['user_id'];
$result = $conn->query("SELECT * FROM applied_jobs WHERE user_id = $user_id");
?>

<h2>Your Applied Jobs</h2>
<table class="table">
    <thead>
        <tr>
            <th>Job Title</th>
            <th>Department</th>
            <th>Project</th>
            <th>Province</th>
            <th>Last Date</th>
            <th>Applied At</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?= $row['job_title'] ?></td>
                <td><?= $row['department'] ?></td>
                <td><?= $row['project'] ?></td>
                <td><?= $row['province'] ?></td>
                <td><?= $row['last_date'] ?></td>
                <td><?= $row['applied_at'] ?></td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>