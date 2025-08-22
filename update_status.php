<?php
include 'include/config.php'; // connection
include 'include/auth.php';   // authentication check (agar zaroorat ho)

if (!isset($_POST['id'], $_POST['status'], $_POST['table'])) {
    echo json_encode(["status" => "error", "message" => "Missing parameters"]);
    exit;
}

$id     = intval($_POST['id']);
$status = ($_POST['status'] === 'Active') ? 'Active' : 'Inactive';
$table  = preg_replace("/[^a-zA-Z0-9_]/", "", $_POST['table']); // sanitize

// ✅ Allow only specific tables
$allowed = ['skills', 'trainings'];
if (!in_array($table, $allowed)) {
    echo json_encode(["status" => "error", "message" => "Invalid table"]);
    exit;
}

$sql = "UPDATE `$table` SET status = ? WHERE id = ?";
$stmt = $cn->prepare($sql);

if (!$stmt) {
    echo json_encode(["status" => "error", "message" => $cn->error]);
    exit;
}

$stmt->bind_param("si", $status, $id);

if ($stmt->execute()) {
    echo json_encode(["status" => "success", "newStatus" => $status]);
} else {
    echo json_encode(["status" => "error", "message" => $stmt->error]);
}

$stmt->close();
$cn->close();
?>
