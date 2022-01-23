<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

include __DIR__ . '/partials/header.php';
require __DIR__ . '/users/users.php';

if (!isset($_GET['id'])) {
    include __DIR__ . '/partials/not_found.php';
    exit;
}

$userId = $_GET['id'];

$user = getUserById($userId);
if (!$user) {
    include __DIR__ . '/partials/not_found.php';
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = updateUser($_POST, $userId);
    uploadImage($_FILES['picture'], $userId);

    header("Location: index.php");
}

?>

<?php include __DIR__ . "/_form.php"; ?>


<?php
include __DIR__ . '/partials/footer.php';
?>