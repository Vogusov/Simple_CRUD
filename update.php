<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);


include __DIR__ . '/partials/header.php';
require __DIR__ . '/users.php';

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
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    updateUser($_POST, $userId);
}
?>


<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Update User: <b><?= $user['name'] ?></b></h3>
        </div>
        <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control" name="name" value="<?= $user['name'] ?>">
                </div>
                <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" class="form-control" name="username" value="<?= $user['username'] ?>">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control" name="email" value="<?= $user['email'] ?>">
                </div>
                <div class="form-group">
                    <label for="">Phone</label>
                    <input type="text" class="form-control" name="phone" value="<?= $user['phone'] ?>">
                </div>
                <div class="form-group">
                    <label for="">Website</label>
                    <input type="text" class="form-control" name="website" value="<?= $user['website'] ?>">
                </div>
                <div class="form-group">
                    <label for="">Image</label>
                    <input type="file" class="form-control-file" name="picture">
                </div>

                <button class="btn btn-success">Submit</button>
            </form>
        </div>

    </div>
</div>


<?php
include __DIR__ . '/partials/footer.php';
?>