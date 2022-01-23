<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);


include __DIR__ . '/partials/header.php';
require __DIR__ . '/users/users.php';

$user = [
    'id' => '',
    'name' => '',
    'username' => '',
    'email' => '',
    'phone' => '',
    'website' => '',
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = createUser($_POST);

    uploadImage($_FILES['picture'], $user['id']);

    header("Location: index.php");
}
?>

<?php include __DIR__ . "/_form.php"; ?>
