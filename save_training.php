<?php
header('Content-Type: application/json');
include 'include/config.php';

$id = $_POST['training_id'] ?? '';

if ($id) {
    // UPDATE
    $stmt = $conn->prepare("UPDATE trainings SET training=?, institute=?, from_date=?, to_date=? WHERE id=?");
    $stmt->bind_param("ssssi", $_POST['training'], $_POST['institute'], $_POST['from_date'], $_POST['to_date'], $id);
    $stmt->execute();
    echo json_encode(["status" => "success"]);
} else {
    // INSERT
    $stmt = $conn->prepare("INSERT INTO trainings (training, institute, from_date, to_date) VALUES (?,?,?,?)");
    $stmt->bind_param("ssss", $_POST['training'], $_POST['institute'], $_POST['from_date'], $_POST['to_date']);
    $stmt->execute();
    echo json_encode(["status" => "success"]);
}
?>
