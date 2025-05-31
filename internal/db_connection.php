<?php 

require __DIR__ . '/../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

$conn = new mysqli($_ENV['DB_HOST'], $_ENV['DB_USER'], $_ENV['DB_PASS'], $_ENV['DB_NAME']);

// $conn = new mysqli($host, $user, $pass, $db);

$login_error = ['error_pass' => '', 'error_username' => '' ];

if ($conn->connect_error) {
    error_log("Connection failed:" . mysqli_connect_error());
    $login_error['username'] = "System error. Please try again later.";
    return $login_error;
}

return $conn

?>
