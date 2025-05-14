<?php
session_start();

$conn = require 'db_connection.php';
$alert = ['success_info' => ''];

if (!isset($_SESSION['admin_id'])) {
    header('Location: ../pages/login.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === "GET" && isset($_GET['user_id'], $_GET['action'])) {
    $user_id = intval($_GET['user_id']);
    $action = $_GET['action'] === 'deactivate' ? 0 : 1;

    $stmt = $conn->prepare("UPDATE users SET is_active = ? WHERE user_id = ?");
    $stmt->bind_param("ii", $action, $user_id);

    if ($stmt->execute()) {
        header("Location: /?status=success");
        $alert['success_info'] = "Successfully ";
    } else {
        echo "Error updating status.";
    }
    $stmt->close();
}

?>
