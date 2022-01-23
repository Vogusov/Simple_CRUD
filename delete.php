<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
include __DIR__ . '/partials/header.php';
require __DIR__ . '/users/users.php';

if (!isset($_POST['id'])) {
    include __DIR__ . '/partials/not_found.php';
    exit;
}
$userId = $_POST['id'];

var_dump($userId);
deleteUser($userId);

header("Location: index.php");
