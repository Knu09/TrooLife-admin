<?php
session_start();

require 'db_connection.php'

if (!isset($_SESSION['admin_id'])) {
    header('Location: ../pages/login.php');
    exit;
}

?>
