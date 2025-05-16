<?php
function addAdmin(array $admin_data): bool
{
    $conn = require 'db_connection.php';
    $required_fields = ['username', 'password', 'confirm_password', 'email', 'first_name', 'last_name'];
    if ($admin_data['password'] !== $admin_data['confirm_password']) {
        $_SESSOIN['form_errors']['confirm_password'] = "Password does not match!";
        return false;
    }

    $hashed_password = password_hash($admin_data['password'], PASSWORD_DEFAULT);

    $check_sql = "SELECT admin_id FROM admins WHERE email = ? OR username = ?";
    $check_stmt = $conn->prepare($check_sql);
    $check_stmt->bind_param('ss', $admin_data['email'], $admin_data['username']);
    $check_stmt->execute();
    $check_stmt->store_result();

    if ($check_stmt->num_row > 0) {
        $_SESSION['form_errors']['email'] = "Email or Username already exists";
        $check_stmt->close();
        return false;
    }

    $date_now = date("Y-m-d");

    $sql = "INSERT INTO admins (username, email, password, first_name, last_name, date_created) VALUES (?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        error_log("Prepare Failed: " . $conn->error);
        $_SESSION['form_errors']['system'] = "Database error";
        header("Location: ../pages/add_accounts.php");
        exit;
    }

    $stmt->bind_param(
        'ssssss',
        $admin_data['username'],
        $admin_data['email'],
        $hashed_password,
        $admin_data['first_name'],
        $admin_data['last_name'],
        $admin_data['date_created']
    );

    return true;
}
