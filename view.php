<?php
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

?>

    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>View User: <b><?= $user['name'] ?></b></h3>
            </div>
            <div class="card-body">
                <a class="btn btn-secondary" href="update.php?<?= $user['id'] ?>">Update</a>
                <form action="delete.php" method="POST" style="display:inline-block">
                    <input type="hidden" name="id" value="<?= $user['id']; ?>">
                    <button class="btn btn-danger">Delete</button>
                </form>
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
                    <td>
                        <a href="http://<?= $user['website'] ?>"><?= $user['website'] ?></a>
                    </td>
                </tr>

                </tbody>
            </table>
        </div>
    </div>

<?php include __DIR__ . '/partials/footer.php'; ?>