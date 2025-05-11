<?php
function handleLogin(): array {
    $login_error = ['error_pass' => '', 'error_username' => '' ];

    if ($_SERVER['REQUEST_METHOD'] === "POST") {
        $username = trim($_POST['username'] ?? '');
        $password = trim($_POST['password'] ?? '');

        # Validate error
        if (empty($username)) {
            $login_error['error_username'] = "Username is required!";
            return $login_error;
        }
        if (empty($password)) {
            $login_error['error_pass'] = 'Password is required!';
            return $login_error;
        }

        $conn = require '../internal/db_connection.php';

        // Prepare statement
        $sql = "SELECT admin_id, username, email, password, first_name, last_name FROM admins WHERE username = ?";
        $stmt = $conn->prepare($sql);

        if (!$stmt) {
            error_log("Prepare failed: " . $conn->error);
            $login_error['error_username'] = "System failed. Please try again";
            $conn->close();
            return $login_error;
        }

        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            $admin = $result->fetch_assoc();
            if ($password === $admin['password'] || password_verify($password, $admin['password'])) {
                if (session_status() === PHP_SESSION_NONE) {
                    session_start();
                }
                $_SESSION['admin_id'] = $admin['admin_id'];
                $_SESSION['username'] = $admin['username'];
                $_SESSION['email'] = $admin['email'];
                $_SESSION['password'] = $admin['password'];
                $_SESSION['first_name'] = $admin['first_name'];
                $_SESSION['last_name'] = $admin['last_name'];
                session_regenerate_id(true);

                $stmt->close();
                $conn->close();
                header("Location: /");
                exit();

            } else {
                $login_error['error_pass'] = "Incorrect password! Please try again.";
            }
        } else {
            $login_error['error_username'] = "Username not found! Please try again.";
        }

        $stmt->close();
        $conn->close();

    }
    return $login_error;
}

?>
