<?php
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

?>

    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>View User: <b><?= $user['name'] ?></b></h3>
            </div>
            <table class="table">


                <tbody>
                <tr>
                    <th>Name:</th>
                    <td><?= $user['name'] ?></td>
                </tr>
                <tr>
                    <th>Username:</th>
                    <td><?= $user['username'] ?></td>
                </tr>
                <tr>
                    <th>Email:</th>
                    <td><?= $user['email'] ?></td>
                </tr>
                <tr>
                    <th>Phone:</th>
                    <td><?= $user['phone'] ?></td>
                </tr>
                <tr>
                    <th>Website:</th>
                    <td><?= $user['website'] ?></td>
                </tr>

                </tbody>
            </table>
        </div>
    </div>

<?php include __DIR__ . '/partials/footer.php'; ?>